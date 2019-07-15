<?php 

$query = $con->query("SELECT * FROM ref_reg_kkktp where id_reg_kkktp='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h2> Detail Data KK KTP </h2>
		<br>
			<table class="table table-bordered" width="50%">
			  <thead>
				
			  </thead>
			  <tbody>
				<tr>
				  <td width="25%" rowspan="5" align="center" ><img src="../file/ktpkk/<?php echo $data['foto']; ?>" height="200 px" width="150 px"  ></td>
				  <td width="25%">ID REGISTRASI</td>
				  <td ><?php echo $data['id_reg_kkktp']; ?></td>
				</tr>
				<tr>
				  <td>Nomor Registrasi</td>
				  <td><?php echo $data['no_reg_kkktp']; ?></td>
				</tr>
				<tr>
				  <td>Nomor Kartu Keluarga</td>
				  <td ><?php echo $data['no_kk']; ?></td>
				</tr>
				<tr>
				  <td>Nomor Induk Kependudukan</td>
				  <td ><?php echo $data['no_nik']; ?></td>
				</tr>
				<tr>
				  <td>Tanggal Register</td>
				  <td ><?php echo $data['tanggal_reg']; ?></td>
				</tr>
				<tr class="bg-info">
					<td></td>
					
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>Nama Register</td>
					<td colspan="2"><?php echo $data['nama_pelapor']; ?></td>
				</tr>
				<tr>
					<td>Tempat Tanggal Lahir</td>
					<td colspan="2"><?php echo $data['tempat_lahir_kkktp']; ?>, <?php echo $data['tanggal_lahir_kkktp']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td colspan="2"><?php echo $data['alamat']; ?></td>
				</tr>
				<tr>
					<td>Layanan</td>
					<td colspan="2"><?php echo $data['status_layanan']; ?></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td colspan="2"><?php echo $data['ket']; ?></td>
				</tr>
				<tr>
					<td colspan="3" align="right">
					 
					<a onclick="return confirm ('Yakin Mau Menghapus');" href="?p=deleterefkk&id=<?php echo $data['id_reg_kkktp'];?>" class="btn btn-danger btn-md "><span data-feather="trash"></span>hapus</a>
					<a href="?p=formeditkk&id=<?php echo $data['id_reg_kkktp']; ?>" class="btn btn-warning btn-md "><span data-feather="edit"></span>edit</a> 
					<a href="?p=pelayanan_ktpkk&id=<?php echo $data['id_reg_kkktp']; ?>" class="btn btn-info btn-md "><span data-feather="corner-up-left"></span>kembali</a> 
					</td>
				</tr>
	
				
			  </tbody>
			</table>
		
		</div>
	</div>
</div>
<br>
<br>