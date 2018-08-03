
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
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
	
</head>

<body onload="noBack();"
onpageshow="if (event.persisted) noBack();">

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
						
						<!--<div class="medium hr"></div>-->
						
						<div class="medium">
							<!--<h2 class="title">Kategori</h2>
							<ul class="noBorder jqSlide sial">
								<li><a href="#">Wordpress</a></li>
								<li><a href="#">Drupall</a></li>
								<li><a href="#">Joomla</a></li>
								<li><a href="#">Text pattern</a></li>
								<li><a href="#">Expression Engine</a></li>
							</ul>-->
						</div>
											
						<!--<div class="medium hr"></div>-->
						
						<div class="medium">
							<!--<h2 class="title">Text <span>Widget</span></h2>
							<p>Vestibulum blandit leo quis enim ultricies sit amet ullamcorper orci dapibus.Vivamus euismod rutrum pulvinar. Suspendisse aliquam, ligula eu faucibus tincidunt.</p>
							-->
						</div>
						
				</div>
				
				<!-- Left Content -->
				<div id="content">
				<div class="section">
							<div class="large">								
                                <div id="gambar"></div>
                                <div >
                                <h3>__________________________________________________________________________________________________________</h3><br />
<link rel="stylesheet" type="text/css" href="res/form/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="res/form/themes/icon.css">
<script type="text/javascript" src="res/form/jquery.easyui.min.js"></script>
<div style="background:#fafafa;padding:2px;width:100%;">
	    
	</div>
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
		
	</style>
                                </div>
							</div>
							<div class="large">
								<span id="progress">
								
							<?php
				error_reporting(0);
				switch($_GET['p'])
				{
				default:
				echo "Halaman belum tersedia,silahkan klik salah satu menu yang tersedia";
				break;
				case "sejarah";
				 include "profile/sejarah.php" ;
				break;
				case "visi";
				 include "profile/visi.php" ;
				break;
				case "struktur";
				 include "profile/struktur.php" ;
				break;
				case "gambaran";
				 include "profile/gambaran.php" ;
				break;
				
				}
				?>		
								</span>
								<span id="konten"></span>
							</div>
							<div class="large hr">
							
							</div>
				
				</div>	
				</div>
			
	</div>
	
	<!-- General footer -->
	<div id="footer" class="clearfix">
		<!--<div class="separator">
			<strong>DON'T MISS</strong>  : Space launch  Friday 15 october live on Channel 5  at 17:00
		</div>-->
		
		<div class="section clearfix">
			<div class="medium article">
				<!--<h2 class="title">Text <span>Widget</span></h2>
				<p>Note the well-defined footprints in the foreground. Buzz is facing up-Sun. There is a reflection of the Sun in his visor. At the bottom of Buzz's note the Many readers are curious about the creators of the books they enjoy. The more than six curiosity.</p>
				<p>Blandit leo quis enim ultricies sit amet ullamcorper orci dapibus.Suspendisse aliquam, ligula eu faucibus tincidunt. Vestibulum blandit leo quis enim ultricies sit amet ullamcorper orci dapibus.</p>
				<a href="#" class="arrow">read more</a>-->
			</div>
			
			<div class="medium">
				<!--<h2 class="title">Which <span>was the first man on moon?</span></h2>
				<p>Just submit your answer and you can get a free 1 year subscription to Sience Magazine Publication.</p>
				<ul class="quizz">
					<li><input type="radio" name="quiz" /> Yuri Gagarin</li>
					<li><input type="radio" name="quiz" /> Neil Amstrong</li>
					<li><input type="radio" name="quiz" /> Neil Obamma</li>
					<li><input type="radio" name="quiz" /> John Dowe</li>
					<li><input type="radio" name="quiz" /> Seth Riddik</li>
				</ul>
				<div><a href="#" class="arrow">Submit answer</a></div>-->
			</div>
			
			<div class="medium">
				<!--<h2 class="title">Follow <span>Us</span></h2>
				<p>You can follow our status updates, news or fan page on the following services:</p>							
				<ul class="social">
					<li><a href="www.twitter.html"><img src="img/icons/social_twitter.png" alt="Twitter" />Follow our Twitter updated</a></li>
					<li><a href="www.facebook.html"><img src="img/icons/social_facebook.png" alt="Facebook" />View our Facebook fan page</a></li>
					<li><a href="www.youtube.com"><img src="img/icons/social_youtube.png" alt="Youtube" />Subscribe to our YouTube channel</a></li>
					<li><a href="www.vimeo.html"><img src="img/icons/social_vimeo.png" alt="Vimeo" />Subscribe to our Vimeo channel</a></li>
				</ul>-->
			</div>
		</div>
		
		<div class="shadow-bottom"></div>
		
		<span class="credits">&copy; <strong>2018 Aldi Riyaldi Skripsi Unma Banten</strong> - All rights reserved.</span>
		
		<ul class="nav">
			<li><a href="index.php">Jalan Kh. Tb. Asnawi No 01 Pandeglang 42213  email: bpbd_pdg@pandeglangkab.go.id</a></li>
		</ul>
	</div>
</div>
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
