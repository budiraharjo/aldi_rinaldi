<div id="page-wrapper">

	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                   <div class="panel-body">
						<form action="proses/tambah_wilayah.php" method="post">
							<div class="form-group">
							  <div class="row">
							<div class="form-group">
								<div id="peta" style="width:100%;height:420px;"></div>
							</div>
							</br>    
							</br>    
								<div class="col-md-8">
								  <label>Nama Wilayah</label>
								  <input type="text" name="kecamatan" autocomplete="off" class="texfield" required placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
								<label>Posisi Peta</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="lat" id="lat" class="texfield" required placeholder="Latitude peta..">
									</div>
									<div class="col-md-4">
										<input type="text" name="lng" id="lng" class="texfield" required placeholder="Longitude peta..">
									</div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</br>
</br>
</br>
</br>
</br>
<script>
var peta,tanda,markers=[];
function initMap() {
	var latlng = new google.maps.LatLng(-6.639126521481149, 106.06382230509632);
	var myOptions = {
		zoom: 8.7,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP 
	};
	peta = new google.maps.Map(document.getElementById("peta"), myOptions);
	peta.addListener("click", 
		function(event) {		
			bersihA();
			markers=[];
			//tandai peta
			tandai(event.latLng);
		}
	);
};
function tandai(lokasi){
	$("#lat").val(lokasi.lat());
	$("#lng").val(lokasi.lng());
		
	tanda = new google.maps.Marker({
		position: lokasi,
		map:peta,
		title:'Lokasi Terpilih'
	});
	markers.push(tanda);
};
function hapusB(peta){
	for (i = 0; i < markers.length; i++){
		markers[i].setMap(peta);
	}
};
function bersihA(){
	hapusB(null);
};
window.onload = function() {
  initMap();
};
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMrCWSExqZwKXirdwQ26-IyodnHtjv4lA&callback=initMap"></script>


