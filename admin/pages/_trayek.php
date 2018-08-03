<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Rute rute di Bandar Lampung</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-road fa-fw"></i> Daftar Rute rute<span class="pull-right"><a href="./?m3&tambah" class="btn btn-success btn-sm"><i class="fa fa-plus fa-fw"></i> Tambah</a></span></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Kode</th>
										<th>Rute</th>
										<th>Warna / Tarif</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								</tbody>
									<?php 
										$q=mysqli_query($connection,"select * from v_rute");
										while ($d=mysqli_fetch_array($q)){
									?>
									<tr>
										<td><?php echo $d["kd_rute"]?></td>
										<td><?php echo $d["rute"]?></td>
										<td><?php echo $d["warna"]?><br>Rp. <?php echo number_format($d['tarif'],2,',','.')?></td>
										<td><img src="../images/<?php echo $d['gambar']?>" width="64px"></td>
										<td><a href="./?m3&ubah=<?php echo $d["kd_rute"]?>" class="btn btn-warning btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a> <a href="proses/hapus-rute.php?kdt=<?php echo $d["kd_rute"]?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a></td>
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