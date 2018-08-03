<?php
if (empty($_GET["ubah"])){
	echo "<script>javascript:history.back()</script>";
}else{
	$kdw=$_GET["ubah"];
	$q=mysqli_query($connection,"select * from wilayah where kd_wilayah='$kdw'");
	$d=mysqli_fetch_array($q);
}
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ubah Data Wilayah</h1>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus fa-fw"></i> Isi Form ini dengan Lengkap</div>
                    <div class="panel-body">
						<form action="proses/ubah_wilayah.php?kdw=<?php echo $kdw?>" method="post">
							<div class="form-group">
							  <div class="row">
							    <div class="col-md-4">
								  <label>Kode rute</label>
								  <span><?php echo $kdw?></span>
								</div>
								<div class="col-md-8">
								  <label>Nama Wilayah</label>
								  <input type="text" name="wilayah" class="form-control" value="<?php echo $d["nama"]?>" required placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
								<label>Posisi Peta</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="lat" id="lat" class="form-control" required value="<?php echo $d["lat"]?>" placeholder="Latitude peta..">
									</div>
									<div class="col-md-4">
										<input type="text" name="lng" id="lng" class="form-control" required value="<?php echo $d["lng"]?>" placeholder="Longitude peta..">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div id="peta" style="width:100%;height:420px;"></div>
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
</div>
<script>
var peta,tanda,markers=[];
function initMap() {
	var latlng = new google.maps.LatLng(-5.382447625064274,105.2577406167984);
	var myOptions = {
		zoom: 17,
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