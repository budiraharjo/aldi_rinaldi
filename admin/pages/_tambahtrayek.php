<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Data Rute rute</h1>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus fa-fw"></i> Isi Form ini dengan Lengkap</div>
                    <div class="panel-body">
						<form action="proses/tambah_rute.php" method="post">
							<div class="form-group">
							  <div class="row">
							    <div class="col-md-6">
								  <label>Kode rute<small><i>(* Isi dg 3 kode)</i></small></label>
								  <input type="text" name="kdt" maxlength="3" class="form-control" required placeholder="Kode rute..">
								  <small><i>* contoh<br>1. Rajabasa - Tanjung karang => RTA<br>2. Tanjung karang - Rajabasa => RTB<br>(** Jika dua jalur 2 kode awal sama yang beda adalah kode terakhir)</i></small>
								</div>
								<div class="col-md-6">
								  <label>Nama Rute rute</label>
								  <input type="text" name="nama" class="form-control" required placeholder="Nama rute..">
								  <label>kendaraan</label>
								  <select name="kdkendaraan" class="form-control" required>
									<option value="">-pilih-</option>
									<?php $q=mysqli_query($connection,"select * from kendaraan");while ($data=mysqli_fetch_array($q)){?>
									<option value="<?php echo $data["kd_kendaraan"]?>"><?php echo $data["kd_kendaraan"].' - '.$data["warna"]?></option>
									<?php }?>
								  </select>
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