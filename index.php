<?php
include "koneksi.php"; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

	<title>BPBD Pandeglang</title>
	
	<!-- <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/chat.js"></script> -->
	
	<link rel="icon" type="image/x-icon" href="templates/tmp/img/logo.ico" />
	
	<link href="templates/tmp/css/style.css" rel="stylesheet" type="text/css" />
	
	<link id="theme" href="templates/tmp/css/grey.css" rel="stylesheet" type="text/css" />
	
	<link id="theme" href="templates/style.css" rel="stylesheet" type="text/css" />	
	<link href="templates/tmp/css/boxs.css" rel="stylesheet" type="text/css" />	
	
	<!-- <link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" /> -->
	
	<script type="text/javascript" src="inc/js/jquery/1.4.2/jquery.min.js" ></script>
	<script type="text/javascript" src="inc/js/jquery.js" ></script>
	<script type="text/javascript" src="inc/js/jquery.coin-slider.js" ></script>
	
	<script type="text/javascript" src="res/menu2/dropmenu.js"></script> 
	
	<link rel="stylesheet" id="smthemenewprint-css"  href="res/menu2/style.css" type="text/css" />
	
	<script type="text/css">
		$(document).ready(function(){
			$("#nav-one").dropmenu();
			
		});	
	</script>
	 
		
	<script type="text/javascript" src="inc/js/global.php" ></script>
	
</head>

<body>

<div class="full">

	<!-- Header -->
	<div id="header" >
		<a href="javascript:void(0)" id="home"><img src="templates/tmp/img/markOneLogo.png" alt="Logo Pandeglang" height="60" width="280" /></a>
		<!--<a href="01-index.html" class="berkah">
			<img src="img/markBerkahLogo.png" alt="Mark One Logo"  />
		</a>-->
	</div>
	
	<!-- Slider Begin -->
	<div id="slider-full">
		<div id="fullSlides">
			<!--<img src="templates/tmp/img/slides/01_slide_big.png" alt="slide01" />-->
			<img src="images/shared/IMG-20180517-WA0053.jpg" alt="Website Resmi Pemerintah Kabupaten Pandeglang - Banten" />
		</div>
		
		<!-- Slider pager navigation -->
		<div class="pager"></div>
	</div>
	<!-- Slider End-->
	

	<div style="background:#FFF;width:940px;font-size:80%;margin:0 auto;padding:0;background:#ccccd0;  border-color:#eee #555 #222 #fff;">
		
	<?php
	include "menu.php";
	?>
	
	</div>
	
	<div class="container clearfix">	
				
				<!-- Right menu -->
				<div id="menu">
						
						 
						
						
<div class="medium">
<div class="content_box">
<div class="subHead"><h5><span><center>Login</center></span></h5></div>
<div class="subFill">
<div  style="margin-left: 15px;">
<!--<script type="text/javascript" src="res/cycle/js/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="res/cycle/css/cycle.css" />
<form >
<table cellpadding="5" cellspacing="5" width="50%">
			<tr class="fitem">
	            <td width="15%"><label for="name">Username</label></td>
	            <td><input class="easyui-validatebox" type="text" name="name" required="true" style="width:150px; color: #333333"></input></td>
	        </tr>
	       <tr class="fitem">
	            <td><label for="email">Password</label></td>
	            <td><input class="easyui-validatebox" type="password" name="password" style="width:150px; color: #333333"></input></td>
	        </tr>
			
</table>
<table cellpadding="5" cellspacing="5" width="50%">
<tr class="fitem">
			<td> </td>
			<td> </td>
			<td> </td>
			<td> </td>
			<td><input type="submit" class="easyui-validatebox" value="Login" style="width:80px; background: #028413; color: #333333"></input></td>
			<td><input type="reset" class="easyui-validatebox" value="Reset" style="width:80px; background: #f92a2a; color: #333333"></input></td>
</tr>
</table>	
</form>
</div>
</div>
</div>
</div>

<div class="medium">							
<br />
<div class="content_box">
<div class="subHead_green"><h5><span><center>Kepala Daerah</center></span></h5></div>
<div class="subFill">
<table width="98%" cellpadding="0" cellspacing="0" style="margin: 0 5px 0 5px;" border="0"><tr align="center" style="font-weight: bold;">
<td>BUPATI</td><td>WAKIL BUPATI</td></tr><tr>
<td>
<img style="margin-top: 0px;" src="galeri/kepala/1.jpeg" alt="kepala/1.jpeg-Jakarta" />
</td><td>
<img style="margin-top: 0px;" src="galeri/kepala/2.jpeg" alt="kepala/2.jpeg-Bandung" />
</td></tr></table>
</div><!--  subFiller class div closed-->
<div class="subBott"><a href="javascript:void(0)" id="dkepala">Detail <img src="images/shared/arr3.png" alt="" /></a></div>
</div><!-- closing div for content box-->
</div>

<div class="medium">
<div class="content_box">
<div class="subHead_maroon"><h5><span><center>Berita</center></span></h5></div>
<div class="subFill">
<div class="list">
<ul>
<?php
$batas=40;
if(empty($paging)){
	$posisi=0;
	$paging=1;
	}else{
	$posisi=($paging-1) * $batas;
	}
	$query="SELECT * FROM berita order by id_berita desc limit $posisi,$batas";  
	$rs=mysqli_query($connection,$query);
	while ($r=mysqli_fetch_array($rs)){ 
	?>											
<li>
<a href="readmore.php?id=<?php echo $r['id_berita'] ?>" onclick="javascript:SetCookie('posisi', 'detail');">
<?php echo $r['judul_berita'] ?>
</a>
</li>
<?php } ?>
</ul>
</div>
</div><!--  subFiller class div closed-->
<div class="subBott"><a href="javascript:void(0)" id="dumum">Seluruhnya <img src="images/shared/arr3.png" alt="" /></a></div>
</div><!-- closing div for content box-->
</div>
		
						
				</div>
				
									
					<!-- Left Content -->
					<div id="content">
						<div class="section">
					
								<div class="large hr"></div>							
								<div class="large article">
									
									<p id="loadcro"></p>
									<div id="loadslide"></div>
									
<link type="text/css" href="res/pikachoose/css/styles.css" rel="stylesheet" />
		<script type="text/javascript" src="res/pikachoose/assets/js/jquery.js"></script>
		<script type="text/javascript" src="res/pikachoose/assets/js/jquery.pikachoose.js"></script>
		<script type="text/javascript" src="res/pikachoose/assets/js/jquery.jcarousel.min.js"></script>
		<script language="javascript">
			<!--
			$(document).ready(
				function (){
					$("#pikame").PikaChoose();

					$("#pikame").jcarousel({scroll:4,					
						initCallback: function(carousel) 
						{
					        $(carousel.list).find('img').click(function() {					        	
					            carousel.scroll(parseInt($(this).parents('.jcarousel-item').attr('jcarouselindex')));
					        });
					    }
				    });

				});
			-->
		</script>

<div class="pikachoose">
<ul id="pikame" class="jcarousel-skin-pika">
	<?php
	$query="SELECT * FROM berita ";   
	$rs=mysqli_query($connection,$query);
	while ($r=mysqli_fetch_array($rs)){ 
	?>
	<li>
	<a href="javascript:void(0)">
	<img src="foto/<?php echo $r['gambar'] ?>"/></a>
					<span>
						<h1><?php echo $r['judul_berita'] ?></h1>
						<p><p>
						<?php echo substr($r['isi_berita'],0,200) ?><a href="readmore.php?id=<?php echo $r['id_berita'] ?>"> Read More &raquo;</a>
					</span>
	</li>
	<?php
	}
	?>
</ul>
</div>

<div class="section">
<div class="pikachoose">
</div>
</div>

<div class="large hr"></div>

					<div id="content">
					<div class="section">
					
						<div class="large hr"></div>
							<div style="width: 300px;float:left;display:block;padding-right: 10px;">
								<div class="medium article">
									<h3>LIST BERITA</h3>
								</div>
								<?php  
								$batas=4;
								if(empty($paging)){
								$posisi=0;
								$paging=1;
								}else{
								$posisi=($paging-1) * $batas;
								}
								$query="SELECT * FROM berita order by id_berita desc limit $posisi,$batas";   
								$rs=mysqli_query($connection,$query);
								while ($r=mysqli_fetch_array($rs)){ 
								?>	
								<span id="leftnews">
								<div class="medium article">
								<h3 align="left"><a href="javascript:void(0)"><?php echo $r['judul_berita'] ?></a></h3>
								<br>
								Posting 
								<?php echo $r['tgl_input'] ?> oleh <?php echo $r['penulis'] ?>
								<br>
								<img src="foto/<?php echo $r['gambar'] ?>" class="border berita">
								<p><?php echo substr($r['isi_berita'],0,100) ?></p>
								<div>
								<a href="readmore.php?id=<?php echo $r['id_berita'] ?>" class="arrow" id="berita1" name="MTAwMg==">selengkapnya</a>
								</div>
								</div>
								</span>
								<?php } ?>		
								<span id="rightnews"></span>					
								
							</div>
							
							<div style="margin: 0 auto;display:block;">
								<div class="medium article">
									<h3>.</h3>
								</div>
								<?php  
								$batas=4;
								if(empty($paging)){
								$posisi=0;
								$paging=1;
								}else{
								$posisi=($paging-1) * $batas;
								}
								$query="SELECT * FROM berita order by id_berita asc limit $posisi,$batas";   
								$rs=mysqli_query($connection,$query);
								while ($r=mysqli_fetch_array($rs)){ 
								?>	
								<span id="leftnews">
								<div class="medium article">
								<h3 align="left"><a href="javascript:void(0)"><?php echo $r['judul_berita'] ?></a></h3>
								<br>
								Posting 
								<?php echo $r['tgl_input'] ?> oleh <?php echo $r['penulis'] ?>
								<br>
								<img src="foto/<?php echo $r['gambar'] ?>" class="border berita">
								<p><?php echo substr($r['isi_berita'],0,100) ?></p>
								<div>
								<a href="readmore.php?id=<?php echo $r['id_berita'] ?>" class="arrow" id="berita1" name="MTAwMg==">selengkapnya</a>
								</div>
								</div>
								</span>
								<?php } ?>	
								<span id="rightnews"></span>					
							</div>
							
						</div>	
					</div>



</div>					
</div>	
</div>
</div>
	
	<!-- General footer -->
	<div id="footer" class="clearfix">
		<!--<div class="separator">
			&nbsp;
		</div>-->
		
		
		<div class="shadow-bottom"></div>
		
		<span class="credits">&copy; <strong>2018 Aldi Riyaldi Skripsi Unma Banten</strong> - All rights reserved.</span>
				
		<ul class="nav">
			<li><a href="index.php">Jalan Kh. Tb. Asnawi No 01 Pandeglang 42213  email: bpbd_pdg@pandeglangkab.go.id</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
function loadTlp(){
	$('#tlp').html('<p><img src="images/shared/loading.gif" /></p>');
	
	$.ajax({
	  url: 'ajax/load_tlp.php',
	  success: function(data){
	    $('#tlp').html(data);
		loadNas();
	  }
	});
}

function loadNas(){
	$('#tnas').html('<p><img src="images/shared/loading.gif" /></p>');
	
	$.ajax({
	  url: 'ajax/load_nasional.php?modified='+ (new Date()).getTime() +'&ops=1',
	  success: function(data){
	    $('#tnas').html(data);
		loadDar();
	  }
	});
}

function loadDar(){
	$('#tdar').html('<p><img src="images/shared/loading.gif" /></p>');
	
	$.ajax({
	  url: 'ajax/load_daerah.php?modified='+ (new Date()).getTime() +'&ops=2',
	  success: function(data){
	    $('#tdar').html(data);
	  }
	});
}

function loadLNews(){
	$('#loadleft').html('<img src="images/shared/loading.gif" />');
	
	$.ajax({
	  url: 'index/iberita.php?modified='+ (new Date()).getTime(),
	  success: function(data){
	    $('#leftnews').html(data);
		$('#loadleft').html('');
		loadLNewds();
	  }
	});
}

function loadLNewds(){
	$('#loadright').html('<img src="images/shared/loading.gif" />');
	
	$.ajax({
	  url: 'index/iberitad.php?modified='+ (new Date()).getTime(),
	  success: function(data){
	    $('#rightnews').html(data);
		$('#loadright').html('');
		//loadCrousel();
	  }
	});
}

function loadCrousel(){
	$('#loadslide').html('<img src="images/shared/loading.gif" />');
	
	$.ajax({
	  url: 'ajax/load_galeri.php?modified='+ (new Date()).getTime(),
	  success: function(data){
	    $('#loadslide').html(data);
		$('#loadcro').html('');
	  }
	});
}

$(function(){
	loadTlp();
	loadLNews();
    
})
</script>
</body>
</html>
