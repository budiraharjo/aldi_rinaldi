<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data kendaraan di Bandar Lampung</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-cube fa-fw"></i> Daftar Wilayah<span class="pull-right"><a href="./?m4&tambah" class="btn btn-success btn-sm"><i class="fa fa-plus fa-fw"></i> Tambah</a></span></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Kode Wilayah</th>
										<th>Nama Wilayah</th>
										<th>Lat,Long</th>
										<th>Aksi</th>
									</tr>
								</thead>
								</tbody>
									<?php 
										$q=mysqli_query($connection,"select * from wilayah");
										while ($d=mysqli_fetch_array($q)){
									?>
									<tr>
										<td><?php echo $d["kd_wilayah"]?></td>
										<td><?php echo $d["nama"]?></td>
										<td><?php echo $d['lat'].','.$d['lng'];?></td>
										<td><a href="./?m4&ubah=<?php echo $d["kd_wilayah"]?>" class="btn btn-warning btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a> <a href="proses/hapus-wilayah.php?kdw=<?php echo $d["kd_wilayah"]?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a></td>
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