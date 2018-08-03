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
	<link rel="stylesheet" id="smthemenewprint-css"  href="res/menu2/menu_dropan.css" type="text/css" />
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
	


</head>

<body >

<div class="full">
		
	<!-- Header -->
	
	

	<div style="background:#FFF;width:940px; heigh:100px; font-size:80%;margin:0 auto;padding:1px;background:#ccccd0;  border-color:#eee #555 #222 #fff;">
	<div id="header" >
		<a href="javascript:void(0)" id="home"><img src="templates/tmp/img/logo_atas.png" alt="Mark One Logo" height="70" width="220" /></a>
	</div>
	<ul id="nav-one" class="dropmenu"> 
			
			
			
		</ul>
	</div>
	<div class="container clearfix">	
				
				<!-- Right menu -->
				<div id="menu">
						<p id="setan1">
						<ul id="nav-one" class="menu_ngedrop"> 
						<a href="admin.php" id="home">
						<img src="button_right/1.png" alt="Mark One Logo" height="150" width="128.5" />
						</a>
						<a href="admin.php?p=daftar_wilayah" id="home">
						<img src="button_right/2.png" alt="Mark One Logo" height="150" width="128.5" />				
						</a>
						
						<a href="admin.php?p=tambah_wilayah" id="home">
						<img src="button_right/3.png" alt="Mark One Logo" height="150" width="128.5" />				
						</a>
						
						<a href="admin.php?p=data_rawanbencana" id="home">
						<img src="button_right/4.png" alt="Mark One Logo" height="150" width="128.5" />				
						</a>
						<a href="#" id="home">
						<img src="button_right/5.png" alt="Mark One Logo" height="150" width="128.5" />				
						</a>
						<a href="logout.php" id="home">
						<img src="button_right/6.png" alt="Mark One Logo" height="150" width="128.5" />				
						</a>
						</ul>
						</p>	
						
						
				</div>
				
				<!-- Left Content -->
				<div id="content">
				<div class="section">
				
							<div class="large">								
                                <div id="gambar"></div>
                                <div id="konten_berita">
<h3><center>PENGOLAHAN DATA SIG BPBD PANDEGLANG</center></h3>
<br/>
<link rel="stylesheet" type="text/css" href="res/form/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="res/form/themes/icon.css">
<script type="text/javascript" src="res/form/jquery.easyui.min.js"></script>
				<?php
				include "koneksi.php";
				error_reporting(0);
				switch($_GET['p'])
				{
				default:
				 include "pages/home.php" ;
				break;
				case "daftar_wilayah";
				include "pages/wilayah.php";
				break;
				case "tambah_wilayah";
				 include "pages/_tambahwilayah.php" ;
				break;
				case "struktur";
				 include "profile/struktur.php" ;
				break;
				case "gambaran";
				 include "profile/gambaran.php" ;
				break;
				case "ubahwilayah";
				 include "pages/_ubahwilayah.php" ;
				break;
				case "data_rawanbencana";
				 include "pages/data_rawanbencana.php" ;
				break;				
				}
				?>		



	<br>
	<br>
	<br>
	<br>
	<br>
	
<div style="background:#fafafa;padding:2px;width:100%;">

	

	</div>
                 </div>
							</div>
							
				
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
