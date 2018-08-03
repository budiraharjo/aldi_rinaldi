<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

	<title>BPBD Pandeglang</title>
	<meta name="keywords" content="kabupaten pendeglang, pandeglang, ujung kulon, banten, masjid banten, wisata banten, wisata anyer, pantai anyer, pantai, berita daerah, skpd, dinas, website pandeglang, website kabupaten pandeglang, kerajaan banten" />
	<meta name="description" content="Pemetaan potensi obyek wisata dan pesona banten, obyek wisata di banten, obyek wisata ziarah, obyek wisata alam, budaya dan kuliner" />
	<meta name="description" content="Wisata Banten, Banten, Wisata, Kabupaten Pandeglang, Wisata Pandeglang, Pandeglang Berkah, Berkah, Argowisata" />
	<link rel="icon" type="image/x-icon" href="templates/tmp/img/logo.ico" />
	<link href="templates/tmp/css/style.css" rel="stylesheet" type="text/css" />
	<link id="theme" href="templates/tmp/css/grey.css" rel="stylesheet" type="text/css" />
	<link href="templates/tmp/css/boxs.css" rel="stylesheet" type="text/css" />
	<link href="templates/tmp/css/galeri.css" rel="stylesheet" type="text/css" />	
	
	<script type="text/javascript" src="inc/js/jquery/1.4.2/jquery.min.js" ></script>
	<script type="text/javascript" src="inc/js/url.js" ></script>
	<!--<script type="text/javascript" src="inc/js/jquery.js" ></script>-->
	<script type="text/javascript" src="js/jquery.easing.js" ></script>
	<script type="text/javascript" src="js/jquery.coin-slider.js" ></script>
	<script type="text/javascript" src="js/custom.js" ></script>
	
	 
	<script type="text/javascript" src="res/menu2/dropmenu.js"></script> 
	<link rel="stylesheet" id="smthemenewprint-css"  href="res/menu2/style.css" type="text/css" />
	<script type="text/css">
		$(document).ready(function(){
			$("#nav-one").dropmenu();
			
		});	
	</script>
		
	<script type="text/javascript" src="inc/js/global.php" ></script>
	<script type="text/javascript">
		window.history.forward();
		function noBack() { 			
			window.history.forward(1); 
		}
	</script>
	<style type="text/css">
#ff{
			margin:0;
			padding:10px 30px;
		}		
		.fitem{
			margin-bottom:5px;
		}
		.fitem input, textarea{
			width: 320px;
		}
		
.canvasPeta{
	margin:0;
	padding:50;
	height: 400px;
}
#map-canvas {
  height: 400px;
  margin: 0;
  padding: 0;
  width: 900px;
  position: absolute;
}

</style>


</head>

<body >

<div class="full">
		
	<!-- Header -->
	<div id="header" >
		<a href="javascript:void(0)" id="home"><img src="templates/tmp/img/markOneLogo.png" alt="Mark One Logo" height="60" width="280" /></a>
		
	</div>
	
	<div class="shadow-top"></div>
	<div style="background:#FFF;width:940px;font-size:80%;margin:0 auto;padding:0;background:#ccccd0;  border-color:#eee #555 #222 #fff;">
		
	<?php
	include "menu.php";
	?>
	</div>
	<div class="container clearfix">	
				
				<!-- Right menu -->
				<div id="menu">
						<p id="setan1"></p>
						<span id="setan"></span>
						
						<div class="medium">							
							
						</div>
						
						<div class="medium">
							<p id="lother"></p>							
							<span id="jdlnews"></span>
							
							<!--<h2 class="title">Berita <span>Terakhir</span></h2>
							<p id="lother"></p>
							<span id="jdlnews"></span>-->
							
						</div>
						
						<div class="medium">
							<p id="lgaleri_berita"></p>							
							<span id="galeri_berita"></span>
						</div>
											
						<div class="medium">
							
						</div>
						
						<div class="medium">
						</div>
						
				</div>
				
				<!-- Left Content -->
				<div id="content">
				<div class="section">
							<div class="large">								
                                <div id="gambar"></div>
                                <div id="konten_berita">
<h3>PETA RADIUS KABUPATEN PANDEGLANG</h3>
<br/>
<link rel="stylesheet" type="text/css" href="res/form/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="res/form/themes/icon.css">
<script type="text/javascript" src="res/form/jquery.easyui.min.js"></script>
 
  
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMrCWSExqZwKXirdwQ26-IyodnHtjv4lA&v=3.exp"></script>
    <script>
  var citymap = {};

  citymap['bogor'] = {
    center: new google.maps.LatLng(-6.592929, 106.784090),
    population: 2000
  };

 
  var cityCircle;
  
  function initialize() {
     var mapOptions = {
   zoom: 9.5,
   center: new google.maps.LatLng(-6.639126521481149, 106.06382230509632),
   mapTypeId: google.maps.MapTypeId.TERRAIN
    };
 
    var map = new google.maps.Map(document.getElementById('map-canvas'),
     mapOptions);
      
    for (var city in citymap) {
   var populationOptions = {
     strokeColor: '#FF0000',
     strokeOpacity: 0.8,
     strokeWeight: 2,
     fillColor: '#FF0000',
     fillOpacity: 0.35,
     map: map,
     center: citymap[city].center,
     radius: Math.sqrt(citymap[city].population) * 100
   };
   // Add the circle for this city to the map.
   cityCircle = new google.maps.Circle(populationOptions);
    }
 
  }
 
  google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
  </head>
  <body>

  <div id="map-canvas"></div>



<div style="background:#fafafa;padding:2px;width:100%;">

	</td>
	</td>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>   

	</div>
                 </div>
							</div>
							<div class="large">
								<span id="progress"></span>
								<span id="konten"></span>
							</div>
							
							<div class="large hr"></div>
				
				</div>	
				</div>
			
	</div>
	
	<!-- General footer -->
	<div id="footer" class="clearfix">
	
		<div class="section clearfix">
			<div class="medium article">
			</div>
			
			<div class="medium">
				</div>
			
			<div class="medium">
			</div>
		</div>
		
		<div class="shadow-bottom"></div>
		
		<span class="credits">&copy; <strong>2018 Aldi Riyaldi Skripsi Unma Banten</strong> - All rights reserved.</span>
		
		<ul class="nav">
			<li><a href="index.php">Jalan Kh. Tb. Asnawi No 01 Pandeglang 42213  email: bpbd_pdg@pandeglangkab.go.id</a></li>
		</ul>
	</div>
</div>

		
		
		<script src="js/jquery-1.11.0.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		
		
<script type="text/javascript">
$(function(){
	var qs = jQuery.parseQuerystring();
	
	$('#lother').html('<img src="images/shared/loading.gif" />');
	
	$.ajax({
	  url: 'index/idberita.php?modified='+ (new Date()).getTime()+"&ops="+qs['ops'],
	  success: function(data){
	    $('#jdlnews').html(data);
		$('#lother').html('');
	  }
	});	
})
</script>
</body>

</html>
