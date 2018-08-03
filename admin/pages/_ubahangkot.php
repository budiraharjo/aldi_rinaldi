<?php
if (empty($_GET["ubah"])){
	echo "<script>javascript:history.back()</script>";
}else{
	$kda=$_GET["ubah"];
	$q=mysqli_query($connection,"select * from kendaraan where kd_kendaraan='$kda'");
	$d=mysqli_fetch_array($q);
}
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Data kendaraan</h1>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus fa-fw"></i> Isi Form ini dengan Lengkap</div>
                    <div class="panel-body">
						<form action="proses/ubah_kendaraan.php?kda=<?php echo $d["kd_kendaraan"]?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
							  <div class="row">
							    <div class="col-md-6">
								  <label>Warna kendaraan</label>
								  <input type="text" name="warna" class="form-control" value="<?php echo $d["warna"]?>" required placeholder="Warna kendaraan..">
								</div>
								<div class="col-md-6">
								  <label>Tarif kendaraan</label>
								  <div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" name="tarif" class="form-control" onkeyup="toRp(this)" value="<?php echo $d["tarif"]?>" required placeholder="Tarif..">
								  </div>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">
							    <div class="col-md-6">
								  <label>Pilih gambar</label>
								  <div class="row"><div class="col-md-6">
									<img src="../images/<?php echo $d["gambar"]?>" width="96px" align="left" style="padding: 5px;box-shadow: 0 0 5px 0px #999;border-radius: 3px; margin: 0 5px 10px 5px;"> <i>Gambar sebelumnya</i>
									<input type="file" name="gmb" class="form-control" onchange="bacaGambar(this)">
								  </div>
								  <div class="col-md-6">
									<img src="" id="tampilan_gmb" width="120px">
								  </div></div>
								</div>
								<div class="col-md-6">
								  <label>Pilih gambar untuk dipeta</label>
								  <div class="row"><div class="col-md-6">
									<img src="../images/balon/<?php echo $d["gambar"]?>" width="96px" align="left" style="padding: 5px;box-shadow: 0 0 5px 0px #999;border-radius: 3px; margin: 0 5px 10px 5px;"> <i>Gambar sebelumnya</i>
									<input type="file" name="gmb2" class="form-control" onchange="bacaGambar2(this)">
								  </div>
								  <div class="col-md-6">
									<img src="" id="tampilan_gmb2" width="120px">
								  </div></div>
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
</div>
<script>
function toRp(objek) {
      separator = ".";
      a = objek.value;
      b = a.replace(/[^\d]/g,"");
      c = "";
      panjang = b.length;
      j = 0;
      for (i = panjang; i > 0; i--) {
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)) {
          c = b.substr(i-1,1) + separator + c;
        } else {
          c = b.substr(i-1,1) + c;
        }
      }
      objek.value = c;

   }
function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#tampilan_gmb').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}
function bacaGambar2(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#tampilan_gmb2').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}
</script>