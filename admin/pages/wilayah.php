 

                            <table  cellspacing='0'>
                                
                                    <tr>
										<th style="font-size:15px;"><center><b>No</b></center></b></th>
										<th style="font-size:15px;"><center><b>Nama Wilayah</b></center></th>
										<th style="font-size:15px;"><center><b>Lat,Long</center></b></th>
										<th colspan="2" style="font-size:15px;"><center><b>Aksi</b></center></th>
									</tr>
								
									<?php 
									// Cek apakah terdapat data page pada URL
									$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
									$limit = 10; // Jumlah data per halamannya
					
									$limit_start = ($page - 1) * $limit;
					
									$no = 0;
										$q=mysqli_query($connection,"select * from wilayah LIMIT ".$limit_start.",".$limit);
										while ($d=mysqli_fetch_array($q)){
									$no++;
									?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $d["nama"]?></td>
										<td><?php echo $d['lat'].','.$d['lng'];?></td>
										<td><a href="./?m4&ubah=<?php echo $d["kd_wilayah"]?>" ><img src="img/edit.png" width="25px"></a></td> 
										<td><a href="proses/hapus-wilayah.php?kdw=<?php echo $d["kd_wilayah"]?>"><img src="img/delet.png" width="20px"></a></td>
									</tr>
									<?php }?>
							
							</table>
				<div class="halaman">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
					<a href="#">First</a> 
					<a href="#">&laquo;</a>
				<?php
				}else{ // Jika page bukan page ke 1
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					 <a href="admin.php?page=1">First</a> 
					 <a href="admin.php?page=<?php echo $link_prev; ?>">&laquo;</a> 
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				<?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = mysqli_query($connection, "SELECT COUNT(*) AS jumlah FROM wilayah");
				$get_jumlah = mysqli_fetch_array($sql2);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
					 <a href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a> 
				<?php
				}
				?>
				
				<!-- LINK NEXT AND LAST -->
				<?php
				// Jika page sama dengan jumlah page, maka disable link NEXT nya
				// Artinya page tersebut adalah page terakhir 
				if($page == $jumlah_page){ // Jika page terakhir
				?>
					<a href="#">&raquo;</a> 
					<a href="#">Last</a> 
				<?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<a href="admin.php?page=<?php echo $link_next; ?>">&raquo;</a>
					<a href="admin.php?page=<?php echo $jumlah_page; ?>">Last</a>
				<?php
				}
				?>
			</div>
						
		<style>				
						table {
  font-family: Arial, Helvetica, sans-serif;
  font-size:12px;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 10px 15px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: left;
  padding-left: 10px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 10px;
  border-left: 0;
}
 
table td {
  padding: 10px 15px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
.halaman
 {
 margin:10px;
 font-size:11px;
 }

.halaman a
 {

padding:3px;
 background:#990000;
 -moz-border-radius:5px;
 -webkit-border-radius:5px;
 border:1px solid #FFA500;
 font-size:10px;
 font-weight:bold;
 color:#FFF;
 text-decoration:none;

}
</style>