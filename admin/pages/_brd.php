<?php
	$q=mysqli_query($connection,"select * from kendaraan");	$jmlang=mysqli_num_rows($q);
	$q=mysqli_query($connection,"select * from rute");	$jmltra=mysqli_num_rows($q);
	$q=mysqli_query($connection,"select * from wilayah");	$jmlwil=mysqli_num_rows($q);
?>
<div id="page-wrapper">
    <div class="row" style="padding-top:30px;">
        <div class="col-lg-4 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-car fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jmlang?></div>
							<div>Jumlah kendaraan</div>
						</div>
					</div>
				</div>
				<a href="./?m2">
					<div class="panel-footer">
						<span class="pull-left">Lihat Semua</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-road fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jmltra?></div>
							<div>Jumlah rute</div>
						</div>
					</div>
				</div>
				<a href="./?m3">
					<div class="panel-footer">
						<span class="pull-left">Lihat Semua</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-cube fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jmlwil?></div>
							<div>Jumlah Wilayah</div>
						</div>
					</div>
				</div>
				<a href="./?m4">
					<div class="panel-footer">
						<span class="pull-left">Lihat Semua</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-md-12">
			<p class="hidden-xs"></p>
			<div class="panel panel-info">
				<div class="panel-heading">
					<i class="fa fa-info fa-fw"></i> Informasi tambahan
				</div>
				<div class="panel-body">
					<div class="panel panel-info">
						<div class="panel-heading"><i class="fa fa-car"></i> Informasi untuk penambahan data kendaraan</div>
						<div class="panel-body">
							<ol>
								<li>Pada saat penginputan data kendaraan baru, warna kendaraan, tarif kendaraan, gambar 1 dan gambar 2 wajib untuk di isi</li>
								<li>Warna kendaraan merupakan salah satu cara untuk mengetahui rute kendaraan</li>
								<li>Tarif kendaraan digunakan untuk menentukan pembayaran dalam sekali menaiki kendaraan</li>
								<li>Gambar 1 digunakan untuk rincian kendaraan dan rute pada peta</li>
								<li>Gambar 2 digunakan untuk menampilkan informasi marking di peta</li>
							</ol>
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading"><i class="fa fa-road"></i> Informasi untuk penambahan rute</div>
						<div class="panel-body">
							<ol>
								<li>Kode rute di sini digunakan untuk menentukan wilayah rute berdasarkan rute rute</li>
								<li>Kode rute hanya boleh berisi 3 karakter saja</li>
								<li>Kode rute diambil dari 1 karakter dari nama rute rute dan 1 huruf terakhir itu merupakan kode untuk rute yang 2 jalur atau tidak, jika 2 jalur (jalur pertama diwakili dengan kode A dan jalur kedua B)</li>
								<li>Contoh pemberian kode adalah : <ol><li>Nama rute Rajabasa - Tanjung karang => RTA</li><li>Tanjung karang - Rajabasa => RTB</li></ol></li>
							</ol>
						</div>
					</div>
					<div class="panel panel-warning">
						<div class="panel-heading"><i class="fa fa-cube"></i> Informasi untuk penambahan wilayah</div>
						<div class="panel-body">
							<ol>
								<li>Wilayah disini merupakan sebuah tempat pemberhentian kendaraan</li>
								<li>Dalam penambahanya disarankan untuk berada pada tempat-tempat yang jelas dan berada pada jalur rute rute kendaraan</li>
								<li>Kemudian dalam proses penambahanya juga diharuskan untuk mengikuti alur dari jalanya kendaraan</li>
								<li>Contoh : <ul><li>Nama rute Rajabasa - Tanjung karang<br>Berarti proses penambahan wilayah dimulai dari Daerah rajabasa hingga tanjung karang</li><li>Tanjung karang - Rajabasa<br>begitu pula dengan ini, dimulai dari tanjung karang hingga rajabasa</li></ul></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>			