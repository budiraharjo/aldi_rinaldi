<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data kendaraan di Bandar Lampung</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-car fa-fw"></i> Daftar kendaraan<span class="pull-right"><a href="./?m2&tambah" class="btn btn-success btn-sm"><i class="fa fa-plus fa-fw"></i> Tambah</a></span></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Kode</th>
										<th>Warna</th>
										<th>Tarif</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								</tbody>
									<?php 
										$q=mysqli_query($connection,"select * from kendaraan");
										while ($d=mysqli_fetch_array($q)){
									?>
									<tr>
										<td><?php echo $d["kd_kendaraan"]?></td>
										<td><?php echo $d["warna"]?></td>
										<td>Rp. <?php echo number_format($d['tarif'],2,',','.')?></td>
										<td><img src="../images/<?php echo $d['gambar']?>" width="64px"></td>
										<td><a href="./?m2&ubah=<?php echo $d["kd_kendaraan"]?>" class="btn btn-warning btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a> <a href="proses/hapus-kendaraan.php?kda=<?php echo $d["kd_kendaraan"]?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a></td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>