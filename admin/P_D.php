<?php
$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
$data=$query->fetch_array();
$a="status";
$b="nama_tahun";
?>
<br>
<h2 align ='right'><b>Pelayanan Registrasi Pindah Datang</b></h2>
	<br>
	
	

	<table border='0' align='center' width="">
	
		<tr align='center'>
		<td colspan='2'> <h4>Menampilkan Data Tahun <?php echo $data[$b]; ?> </h4></td>
		</tr>
		<tr align='center'>
		<td><h5>Id tahun (<?php echo $data['id_tahun']; ?>)</h5></td>
		<td><h5>Status : <?php echo $data[$a]; ?></h5></td>
		
		
		</tr>
		
	<table>
	<br>
	<!-- Button trigger modal -->
	<div class="row">
		<div class="col-md" align="left">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  <span data-feather="plus"></span> Register Baru
	</button>
		</div>
	</div>
	

	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Form Register Pindah Datang</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<?php include "addrefpd.php";?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	 <br>
	<div class="row">
			<div class="col-md">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th width="5%" >#</th>
							<th>Nomor Registrasi</th>
							<th>Nama Pelapor</th>
							<th>NIK</th>
							<th>Tanggal Pindah</th>
							<th >Alamat Tujuan</th>
							<th width="16%">Action</th>
						</tr>
					</thead>
					<tbody>


<?php

if ($query){
	$query2 = $con->query("SELECT * FROM pindah_datang WHERE  YEAR(tanggal_pindah)='$data[$b]'");
	$i=1;
	while ($data1=$query2->fetch_array()){

?>
		<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data1['no_reg_pd'];?></td>
							<td><a href="?p=detailrefpd&id=<?php echo $data1['id_reg_pd']; ?>"><?php echo $data1['nama_pelapor_pd'];?></a> </td>
							<td><?php echo $data1['nik_pd'];?></td>
							<td><?php echo $data1['tanggal_pindah'];?></td>
							<td><?php echo $data1['alamat_tujuan'];?></td>
							<td align="center"><a href="?p=editrefpd&id=<?php echo $data1['id_reg_pd']; ?>" class="btn btn-warning btn-sm "><span data-feather="edit"></span>edit</a>  
							<a onclick="return confirm ('Yakin Mau Menghapus');" href="?p=deleterefpd&id=<?php echo $data1['id_reg_pd'];?>" class="btn btn-danger btn-sm "><span data-feather="trash"></span>hapus</a></td>
		</tr>
<?php
		$i++;
}
}
?>
   
					</tbody>
					<tfoot>
						<tr>
							<th width="5%" >#</th>
							<th>Nomor Registrasi</th>
							<th>Nama Pelapor</th>
							<th>NIK</th>
							<th>Tanggal Lahir</th>
							<th >Alamat Tujuan</th>
							<th width="16%">Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			
	</div>
