<?php 

$query = $con->query("SELECT * FROM refpelayananumum where id_reg='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h2> Detail Data Pelayanan Umum</h2>
		<br>
			<table class="table table-bordered">
			  <thead>
				
			  </thead>
			  <tbody>
				<tr>
				  <td width="30%">Nomor Registrasi</td>
				  <td><?php echo $data['no_reg'];?></td>
				</tr>
				<tr>
				  <td width="30%">NIK</td>
				  <td><?php echo $data['nik'];?></td>
				</tr>
				<tr>
				  <td width="30%">Nama Lengkap</td>
				  <td><?php echo $data['nama'];?></td>
				</tr>
				<tr>
				  <td width="30%">Tempat Lahir</td>
				  <td><?php echo $data['tempat_lahir'];?></td>
				</tr>
				<tr>
				  <td width="30%">Tanggal Lahir</td>
				  <td><?php echo $data['tanggal_lahir'];?></td>
				</tr>
				<tr>
				  <td width="30%">Jenis Kelamin</td>
				  <td><?php echo $data['jenis_kelamin'];?></td>
				</tr>
				<tr>
				  <td width="30%">Agama</td>
				  <td><?php echo $data['agama'];?></td>
				</tr>
				<tr>
				  <td width="30%">Perkerjaan</td>
				  <td><?php echo $data['perkerjaan'];?></td>
				</tr>
				<tr>
				  <td width="30%">Alamat</td>
				  <td><?php echo $data['alamat'];?></td>
				</tr>
				<tr>
				  <td width="30%">Berlaku Tanggal</td>
				  <td><?php echo $data['tanggal_buat'];?></td>
				</tr>
				<tr>
				  <td width="30%">Keperluan</td>
				  <td><?php echo $data['keperluan'];?></td>
				</tr>
				<tr>
				  <td width="30%">Keterangan lain-lain</td>
				  <td><?php echo $data['ket_lain'];?></td>
				</tr>
				<tr>
				  <td width="30%"></td>
					<td align="right">

										<a href="cetak.php?&id=<?php echo $data['id_reg']; ?>" target="_blank" class="btn btn-primary " role="button" aria-disabled="true"><span data-feather="printer"></span> Print</a>
					
					<a href="?p=pelayanan_umum" class="btn btn-info btn-md "><span data-feather="corner-up-left"></span>kembali</a> 
					</td>
				</tr>
				
				
				
			  </tbody>
			</table>
		
		</div>
	</div>
</div>
<br>
<br>
