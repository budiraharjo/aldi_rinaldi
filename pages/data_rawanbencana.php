						<form action="proses/tambah_data_rawanbencana.php" method="post">
							<div id="main">
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Cari Nama Wilayah</label>
								  <input type="text" id="cari_kecamatan" autocomplete="off" class="texfield" placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							</div>
							
							<div id="sidebar">
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Nama Wilayah</label>
								  <input type="hidden" name="id_wilayah" id="id_wilayah" class="texfield" readonly placeholder="Masukan Nama Wilayah..">
								  <input type="text" name="kecamatan" id="kecamatan" class="texfield" readonly placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
								<label>Posisi Peta</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="lat" id="lat" class="texfield" readonly placeholder="Latitude peta..">
									</div>
									<div class="col-md-4">
										<input type="text" name="lng" id="lng" class="texfield" readonly placeholder="Longitude peta..">
									</div>
								</div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Luas Wilayah</label>
								  <input type="text" name="luas" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Kepadatan</label>
								  <input type="text" name="kepadatan" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Jumlah Irigasi</label>
								  <input type="text" name="jumlah_sungai" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Tinggi Irigasi</label>
								  <input type="text" name="tinggi_sungai" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Lebar Irigasi</label>
								  <input type="text" name="lebar_sungai" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Debit Air</label>
								  <input type="text" name="debit" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="row">    
								<div class="col-md-8">
								  <label>Luas Radius</label>
								  <input type="text" name="radius" class="texfield" rquired placeholder="Masukan Nama Wilayah..">
								</div>
							  </div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Simpan</button>
							</div>
							</div>
						</form>
					
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
<script src="jquery.js"></script>
<script src="jquery-ui.min.js"></script>
<script>

   /* autocomplete */
   $('#cari_kecamatan').autocomplete({
		delay: 0,
		source: function( request, response ) {
		 
		  $.ajax({
			url: 'cari_kecamatan.php',
			dataType: "json",
			data: 'cari=' + request.term,
			success: function( data ) {
			  
			  response( $.map( data, function( item ) {
				return {
				  label  : item.kecamatan,
				  id_wilayah : item.id_wilayah,
				  lat : item.lat,
				  lng   : item.lng,
				 
				 
				}
			   }));
			},
			error: function(e){  
			  alert('Error: ' + request);  
			}  
		   });
		},
		minLength: 1,
		select: function( event, ui ) {
		  /* ketika nama yang dicari diklik, maka ditampilkan di form */
		  $('#kecamatan').val(ui.item.label);
		  $('#id_wilayah').val(ui.item.id_wilayah);
		  $('#lat').val(ui.item.lat);
		  $('#lng').val(ui.item.lng);
		  $('#cari_kecamatan').val("");
		  return false;
		},
		focus: function(event, ui) {
			return false;
		}
	});
   
   /* @end autocomplete */
</script>
<style>
#main {
    float:left;
    width:250px;
    background:#90EE90;
    padding:10px;
}
 
#sidebar {
    float:right;
    width:250px;
    background:#FAFAD2;
    padding:10px;
}
</style>

