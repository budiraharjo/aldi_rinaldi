//fungsi untuk XML HTTP request
function GetxhrObject(){
	var xhr=null;
	try {
		//Untuk Browser Firefox, Opera 8.0+, Safari
		xhr=new XMLHttpRequest();
		}catch (e){
		//Untuk Browser Internet Explorer
		try {
			xhr=new ActiveXObject("Msxml2.XMLHTTP");
			}catch (e){
			xhr=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xhr;
};

//untuk pemetaan trayek
var peta,tanda,asal,tujuan,markers = [],hsl=[],hsl2=[],i,dD,dS,kd_asal,kd_tujuan,gmb_asal,gmb_tujuan,path,path2,tarif,warna;

function initMap() {
	dD = new google.maps.DirectionsRenderer({suppressMarkers: true});
	dS = new google.maps.DirectionsService;
	var latlng = new google.maps.LatLng(-5.397447625064274,105.2655906167984);
	var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP 
	};
	peta = new google.maps.Map(document.getElementById("maps"), myOptions);
	
	dD.setMap(peta);
	path=new google.maps.Polyline();
	path2=new google.maps.Polyline();
	
	/*untuk cari koordinat komputer
		if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
		var pos = {
		lat: position.coords.latitude,
		lng: position.coords.longitude
		};
		
		peta.setCenter(pos);
		}, function() {
		handleLocationError(true, infoWindow, peta.getCenter());
		}, { maximumAge: 500000, enableHighAccuracy:true, timeout: 6000 });
		} else {
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, peta.getCenter());
	}*/
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation ?
	'Error: The Geolocation service failed.' :
	'Error: Your browser doesn\'t support geolocation.');
}

$(function() {
	$( "#asal" ).autocomplete({
		source: "sources.php?rute="+pilrute,  
		minLength:2,
		select: function( event, ui ) {
			$.getJSON("data.php?cari="+ui.item.id, function(data) {
				$.each(data.result, function() {
					asal=new google.maps.LatLng(this['lat'],this['lng']);
				});
			});
			kd_asal=ui.item.id;
			
			$.getJSON("trayek.php?cari="+kd_asal.substr(0,3), function(data) {
				$.each(data.result, function() {
					gmb_asal=this["gmb"];
					tarif=this["trf"];
					warna=this["wrn"];
				});
			});
		}
	});
	$( "#tujuan" ).autocomplete({
		source: "sources.php?rute="+pilrute,  
		minLength:2,
		select: function( event, ui ) {
			$.getJSON("data.php?cari="+ui.item.id, function(data) {
				$.each(data.result, function() {
					tujuan=new google.maps.LatLng(this['lat'],this['lng']);
				});
			});
			kd_tujuan=ui.item.id;
			
			$.getJSON("trayek.php?cari="+kd_tujuan.substr(0,3), function(data) {
				$.each(data.result, function() {
					gmb_tujuan=this["gmb"];
					document.getElementById("gmbangkot").innerHTML="<img width ='120px' src='images/"+gmb_asal+"'>";
					document.getElementById("trfangkot").innerHTML="<b>Rp. "+tarif+",-</b>";
				});
			});
		}
	});
});

function GetDirect(){
	bersihA();
	markers=[];
	hsl=[];
	hsl2=[];
	hsla=[];
	path.setMap(null);
	path2.setMap(null);
	
	//dalam satu lajur yg sama
	if (kd_asal.substr(0,3) == kd_tujuan.substr(0,3)){
		
		//jika tdk melawan arus kendaraan
		if (kd_asal.substr(3,7)<kd_tujuan.substr(3,7)){
			asal=asal;
			tujuan=tujuan;
			calculateAndDisplayRoute(dS,dD);
		}
		
		//jika melawan arus kendaraan
		else{
			var lata=asal.lat(),lnga=asal.lng(),latt=tujuan.lat(),lngt=tujuan.lng();
			$.getJSON("nilai.php?bkn="+kd_asal.substr(0,3), function(data) {
				$.each(data.result, function() {
					var a=this['lat'];		var b=this['lng'];
					var kd=this['kd'];		var nm=this['nm'];
					
					//cari koordinat terdekat dengan asal
					var hna=Math.sqrt(((lata-a)*(lata-a))+((lnga-b)*(lnga-b)));
					var gna=((a-lata)*(a-lata))+((b-lnga)*(b-lnga));
					var fna=hna+gna;
					
					//cari koordinat terdekat dengan tujuan
					var hnt=Math.sqrt(((latt-a)*(latt-a))+((lngt-b)*(lngt-b)));
					var gnt=((a-latt)*(a-latt))+((b-lngt)*(b-lngt));
					var fnt=hnt+gnt;
					
					//input ke array
					hsl.push({kd_wilayah:kd,nama:nm,pos_lat:a,pos_lng:b,pos_nilai:fna});
					hsl2.push({kd_wilayah:kd,nama:nm,pos_lat:a,pos_lng:b,pos_nilai:fnt});
				});
				
				//urutkan hasil rute yg ditemukan A-Z
				hsl.sort(function(m,n){return m.pos_nilai - n.pos_nilai});
				hsl2.sort(function(m,n){return m.pos_nilai - n.pos_nilai});
				
				//menentukan posisi awal dan akhir/tujuan
				var mulai=new google.maps.LatLng(hsl[0].pos_lat,hsl[0].pos_lng);
				var berhenti=new google.maps.LatLng(hsl2[0].pos_lat,hsl2[0].pos_lng);
				
				//tampilkan rute di peta
				dS.route({
					origin: mulai, 
					destination: berhenti, 
					travelMode: google.maps.TravelMode.DRIVING
					}, function(response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						dD.setDirections(response);
						} else {
						window.alert('Directions request failed due to ' + status);
					}
				});
				
				//tampilkan rincian google
				//dD.setPanel(document.getElementById('rincian'));
				
				//memberi markers pada peta
				$("#rincian").empty();
				var tanda_asal=new google.maps.Marker({
					position: asal,
					map: peta,
					icon: "images/mulai.png",
					title: "Mulai jalan kaki dari sini.."
				});
				$("#rincian").append("<div><img src='images/mulai asli.png'> <span>Mulai jalan kaki dari sini..</span></div>");
				
				var tanda_mulai=new google.maps.Marker({
					position: mulai,
					map: peta,
					icon: "images/balon/"+gmb_asal,
					title: "Mulai naik angkot dari sini.."
				});
				$("#rincian").append("<div><img src='images/"+gmb_asal+"'> <span>Mulai naik angkot dari sini..</span></div>");
				
				var tanda_berhenti=new google.maps.Marker({
					position: berhenti,
					map: peta,
					icon: "images/balon/"+gmb_tujuan,
					title: "Turun dari angkot disini.."
				});
				$("#rincian").append("<div><img src='images/"+gmb_tujuan+"'> <span>Turun dari angkot disini..</span></div>");
				
				var tanda_jalan_lagi=new google.maps.Marker({
					position: berhenti,
					map: peta,
					icon: "images/jalan2.png",
					title: "Jalan kaki menuju tujuan.."
				});
				$("#rincian").append("<div><img src='images/jalan2 asli.png'> <span>Jalan kaki lagi dari sini..</span></div>");
				
				var tanda_tujuan=new google.maps.Marker({
					position: tujuan,
					map: peta,
					icon: "images/selesai.png",
					title: "Tujuan anda disini.."
				});
				$("#rincian").append("<div><img src='images/selesai asli.png'> <span>Tujuan anda ada didekat sini..</span></div>");
				
				//menampilkan trafik lalu lintas yg ada
				var flightJalan=[asal,mulai];
				path=new google.maps.Polyline({
					path: flightJalan,
					strokeColor: '#ddee22',
					strokeOpacity: 1.0,
					strokeWeight: 6        
				});
				var flightJalan2=[berhenti,tujuan];
				path2=new google.maps.Polyline({
					path: flightJalan2,
					strokeColor: '#ddee22',
					strokeOpacity: 1.0,
					strokeWeight: 6        
				});
				
				//menampilkan semua marker pada peta
				path.setMap(peta);
				path2.setMap(peta);
				markers.push(tanda_asal);
				markers.push(tanda_mulai);
				markers.push(tanda_berhenti);
				markers.push(tanda_jalan_lagi);
				markers.push(tanda_tujuan);
			})
		}
	}
	
	//jika masih dalam satu jalan yg sama
	else if (kd_asal.substr(0,2) == kd_tujuan.substr(0,2)){
		var lata=asal.lat();
		var lnga=asal.lng();
		var latn=tujuan.lat();
		var lngn=tujuan.lng();
		$.getJSON("nilai.php?rujukan="+kd_asal.substr(0,3), function(data) {
			$.each(data.result, function() {
				var a=this['lat'];		var b=this['lng'];
				var kd=this['kd'];		var nm=this['nm'];
				
				//cari koordinat terdekat dengan tujuan
				var hn=Math.sqrt(((latn-a)*(latn-a))+((lngn-b)*(lngn-b)));
				var gn=((a-latn)*(a-latn))+((b-lngn)*(b-lngn));
				var fn=hn+gn;
				
				//insert ke array
				hsl.push({kd_wilayah:kd,nama:nm,pos_lat:a,pos_lng:b,pos_nilai:fn});
			});
			
			//mengurutkan rute yg didapat A-Z
			hsl.sort(function(m,n){return m.pos_nilai - n.pos_nilai});
			
			//cek tujuan melawan arus kendaraan atau tidak
			var xhr = GetxhrObject();
			if (xhr) {
				var formData = new FormData();
				formData.append("lat", hsl[0].pos_lat);
				formData.append("lng", hsl[0].pos_lng);
				
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						
						//jika melawan arus
						if (kd_asal.substr(3,7) > xhr.responseText.substr(3,7)){
							
							$.getJSON("nilai.php?rujukan="+kd_tujuan.substr(0,3), function(data) {
								$.each(data.result, function() {
									var a2=this['lat'];		var b2=this['lng'];
									var kd2=this['kd'];		var nm2=this['nm'];
									//cari koordinat terdekat dengan asal
									var hna=Math.sqrt(((lata-a2)*(lata-a2))+((lnga-b2)*(lnga-b2)));
									var gna=((a2-lata)*(a2-lata))+((b2-lnga)*(b2-lnga));
									var fna=hna+gna;
									
									//insert ke array
									hsla.push({kd_wilayah:kd2,nama:nm2,pos_lat:a2,pos_lng:b2,pos_nilai:fna});
								});
								
								//urutkan
								hsla.sort(function(m,n){return m.pos_nilai - n.pos_nilai});
								
								var mulai=new google.maps.LatLng(hsla[0].pos_lat,hsla[0].pos_lng);
								//menampilkan rute dipeta
								dS.route({
									origin: mulai, 
									destination: tujuan, 
									travelMode: google.maps.TravelMode.DRIVING
									}, function(response, status) {
									if (status == google.maps.DirectionsStatus.OK) {
										dD.setDirections(response);
										} else {
										window.alert('Directions request failed due to ' + status);
									}
								});
								
								//menampilkan rincian
								//dD.setPanel(document.getElementById('rincian'));
								
								//memberi markers pada peta
								$("#rincian").empty();
								var tanda_asal=new google.maps.Marker({
									position: asal,
									map: peta,
									icon: "images/mulai.png",
									title: "Mulai jalan kaki dari sini.."
								});
								$("#rincian").append("<div><img src='images/mulai asli.png'> <span>Mulai jalan kaki dari sini..</span></div>");
				
								var tanda_mulai=new google.maps.Marker({
									position: mulai,
									map: peta,
									icon: "images/balon/"+gmb_asal,
									title: "Mulai naik angkot dari sini.."
								});
								$("#rincian").append("<div><img src='images/"+gmb_asal+"'> <span>Mulai naik angkot dari sini..</span></div>");
								
								var tanda_berhenti=new google.maps.Marker({
									position: tujuan,
									map: peta,
									icon: "images/balon/"+gmb_tujuan,
									title: "Turun dari angkot disini dan tujuan anda disekitar sini.."
								});
								$("#rincian").append("<div><img src='images/"+gmb_tujuan+"'> <span>Turun dari angkot disini dan tujuan anda disekitar sini..</span></div>");
								
								//menampilkan jalan kaki di peta
								var flightJalan=[asal,mulai];
								path=new google.maps.Polyline({
									path: flightJalan,
									strokeColor: '#ddee22',
									strokeOpacity: 1.0,
									strokeWeight: 6        
								});
								
								//menampilkan semua marker pada peta
								path.setMap(peta);
								markers.push(tanda_asal);
								markers.push(tanda_mulai);
								markers.push(tanda_berhenti);
							});
						}
						
						//jika tdk melawan arus
						else{
							var berhenti=new google.maps.LatLng(hsl[0].pos_lat,hsl[0].pos_lng);
							
							//menampilkan rute dipeta
							dS.route({
								origin: asal, 
								destination: berhenti, 
								travelMode: google.maps.TravelMode.DRIVING
								}, function(response, status) {
								if (status == google.maps.DirectionsStatus.OK) {
									dD.setDirections(response);
									} else {
									window.alert('Directions request failed due to ' + status);
								}
							});
							
							//menampilkan rincian
							//dD.setPanel(document.getElementById('rincian'));
							
							//memberi markers pada peta
							$("#rincian").empty();
							var tanda_asal=new google.maps.Marker({
								position: asal,
								map: peta,
								icon: "images/balon/"+gmb_asal,
								title: "Mulai naik angkot dari sini.."
							});
							$("#rincian").append("<div><img src='images/"+gmb_asal+"'> <span>Mulai naik angkot dari sini..</span></div>");
							
							var tanda_berhenti=new google.maps.Marker({
								position: berhenti,
								map: peta,
								icon: "images/balon/"+gmb_tujuan,
								title: "Turun dari angkot di sini.."
							});
							$("#rincian").append("<div><img src='images/"+gmb_tujuan+"'> <span>Turun dari angkot di sini..</span></div>");
							
							var tanda_jalan_lagi=new google.maps.Marker({
								position: berhenti,
								map: peta,
								icon: "images/jalan2.png",
								title: "Mulai dari sini jalan kaki.."
							});
							$("#rincian").append("<div><img src='images/jalan2 asli.png'> <span>Jalan kaki lagi dari sini..</span></div>");
							
							var tanda_tujuan=new google.maps.Marker({
								position: tujuan,
								map: peta,
								icon: "images/selesai.png",
								title: "Tujuan anda disini.."
							});
							$("#rincian").append("<div><img src='images/selesai asli.png'> <span>Tujuan anda ada didekat sini..</span></div>");
							
							//menampilkan jalan kaki di peta
							var flightJalan=[berhenti,tujuan];
							path=new google.maps.Polyline({
								path: flightJalan,
								strokeColor: '#ddee22',
								strokeOpacity: 1.0,
								strokeWeight: 6        
							});
							
							//menampilkan semua marker pada peta
							path.setMap(peta);
							markers.push(tanda_asal);
							markers.push(tanda_berhenti);
							markers.push(tanda_jalan_lagi);
							markers.push(tanda_tujuan);
						}
					}
				}
				//kirim xml data
				xhr.open("POST","cek-sejalan.php",true);
				xhr.send(formData);
			}
		});
	}else{
		alert("Mohon Maaf rute belum ketemu, aplikasi ini masih dalam tahap pengembangan..");
	}
}

function calculateAndDisplayRoute(directionsService, directionsDisplay){
	directionsService.route({
		origin: asal, 
		destination: tujuan, 
		travelMode: google.maps.TravelMode.DRIVING
		}, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
			} else {
			window.alert('Directions request failed due to ' + status);
		}
	});
	
	//markers
	$("#rincian").empty();
	var tanda_asal=new google.maps.Marker({
		position: asal,
		map: peta,
		icon: "images/balon/"+gmb_asal,
		title: "Mulai naik angkot dari sini.."
	});
	$("#rincian").append("<div><img src='images/"+gmb_asal+"'> <span>Mulai naik angkot dari sini..</span></div>");
	
	var tanda_tujuan=new google.maps.Marker({
		position: tujuan,
		map: peta,
		icon: "images/balon/"+gmb_tujuan,
		title: "Turun dari angkot disini, tujuan anda didekat sini"
	});
	$("#rincian").append("<div><img src='images/"+gmb_tujuan+"'> <span>Turun dari angkot disini dan tujuan anda disekitar sini..</span></div>");
	
	markers.push(tanda_asal);
	markers.push(tanda_tujuan);
	// menampiklkan rute pada peta dan juga direction panel sebagai petunjuk text
	//directionsDisplay.setPanel(document.getElementById('rincian'));
	
	// menampilkan layer traffic atau lalu-lintas pada peta
	var trafficLayer = new google.maps.TrafficLayer();
	trafficLayer.setMap(peta);
}

function hapusB(peta){
	for (i = 0; i < markers.length; i++){
		markers[i].setMap(peta);
	}
};
function bersihA(){
	hapusB(null);
};