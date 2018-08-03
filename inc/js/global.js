function SetCookie (name, value) {
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;
	var path = (argc > 3) ? argv[3] : null;
	var domain = (argc > 4) ? argv[4] : null;
	var secure = (argc > 5) ? argv[5] : false;
	document.cookie = name + "=" + escape (value) +
			((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
			((path == null) ? "" : ("; path=" + path)) +
			((domain == null) ? "" : ("; domain=" + domain)) +
			((secure == true) ? "; secure" : "");
}


$(document).ready(function(){
		$('#index').click(function () {
			SetCookie('posisi', 'index');
			window.location.href = 'index.php';	   			
		});
		
		$('#wisata').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php';	   			
		});
		
		$('#walam').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php?prof=MQ==';
		});
		
		$('#wbudaya').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php?prof=Mg==';
		});
		
		$('#wkuliner').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php?prof=Mw==';
		});
		
		$('#wlain').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php?prof=NA==';
		});
		
		$('#wisata').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'wisata.php';	   			
		});
		
		$('#sejarah').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'profil.php?prof=MQ==';
		});
		
		$('#visi').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'profil.php?prof=Mg==';
		});
		
		$('#semboyan').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'profil.php?prof=Mw==';
		});

        $('#gambaran').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'profil.php?prof=NA==';
		});
        
        $('#kepala').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'pimpinan.php';
		});
		
		$('#skpd').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'skpd.php';
		});

        $('#muspida').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'muspida.php';
		});
                		
		$('#perda').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'peraturan.php?prof=MQ==';
		});
		
		$('#perbup').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'peraturan.php?prof=Mg==';
		});
		
		$('#dokumen').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'dokumen.php';
		});
		
		$('#dkepala').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'pimpinan.php';
		});
		
		$('#dumum').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'pengumuman.php?tipe=detail';
		});
		
		$('#hotel').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'hotel.php';
		});
		
		$('#bukutamu').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'bukutamu.php';
		});
		
				
		$('#struktur').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = '403.php';
		});
		
		$('#atani').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'agrobisnis.php?prof=MQ==';
		});
		
		$('#akebun').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'agrobisnis.php?prof=Mg==';
		});
		
		$('#aikan').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'agrobisnis.php?prof=Mw==';
		});
		
		$('#aternak').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'agrobisnis.php?prof=NA==';
		});
		
		$('#ahutan').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'agrobisnis.php?prof=NQ==';
		});
		
		$('#video').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = '403.php';
		});
		
		$('#foto').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = '403.php';
		});
		
		$('#arsipberita').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'arsipberita.php';
		});
		
		$('#radio').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = '403.php';
		});
		
		$('.link_adds').click(function () {
			SetCookie('posisi', 'detail');
			window.location.href = 'transparansi.php';
		});
		
		/*$('#kepbup').click(function () {
			SetCookie('posisi', 'detail');			
			window.location.href = 'peraturan.php?prof=Mw==';
		});*/
});

$(document).ready(function(){
		
			$('#berita0').live('click', function() {
				var nama = $('#berita0').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=1&prof=' + nama;
			});
			
			$('#berita1').live('click', function() {
				var nama = $('#berita1').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=1&prof=' + nama;
			});
			
			$('#berita2').live('click', function() {
				var nama = $('#berita2').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=1&prof=' + nama;
			});
			
			$('#berita3').live('click', function() {
				var nama = $('#berita3').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=1&prof=' + nama;
			});
			
			$('#berita4').live('click', function() {
				var nama = $('#berita4').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=1&prof=' + nama;
			});
			
			
			$('#berita10').live('click', function() {
				var nama = $('#berita10').attr('name');
				SetCookie('posisi', 'detail');
				
				window.location.href = 'berita.php?ops=2&prof=' + nama;
			});
			
			$('#berita11').live('click', function() {
				var nama = $('#berita11').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=2&prof=' + nama;
			});
			
			$('#berita12').live('click', function() {
				var nama = $('#berita12').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=2&prof=' + nama;
			});
			
			$('#berita13').live('click', function() {
				var nama = $('#berita13').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=2&prof=' + nama;
			});
			
			$('#berita14').live('click', function() {
				var nama = $('#berita14').attr('name');
				SetCookie('posisi', 'detail');			
				window.location.href = 'berita.php?ops=2&prof=' + nama;
			});
		
});

       
function ajax_gbr(ops, prof) {
		$('#gambar').html('<p><img src="images/shared/loading.gif" /></p>');

		$.ajax({
			url: "index/load_gbr.php?modified="+ (new Date()).getTime() +"&ops="+ops+"&prof="+prof,
			success: function(msg){
							$('#gambar').html(msg);
					}
		});
}
	
function ajax_view(ops, prof) {		
        $('#konten_berita').html('<p><img src="images/shared/loading.gif" /></p>');
		
		$.ajax({
			url: "ajax/load_berita.php?modified="+ (new Date()).getTime() +"&ops="+ops+"&prof="+prof,
			success: function(msg){
							$('#konten_berita').html(msg);
							ajax_gbr(ops, prof);
					}
		});
}

function gberita(ops, prof) {		
        $('#lgaleri_berita').html('<p><img src="images/shared/loading.gif" /></p>');
		
		$.ajax({
			url: "ajax/load_galeri_berita.php?modified="+ (new Date()).getTime() +"&ops="+ops+"&prof="+prof,
			success: function(msg){
							$('#galeri_berita').html(msg);
							$('#lgaleri_berita').html('');
					}
		});
}