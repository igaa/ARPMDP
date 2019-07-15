<?php 

$query = $con->query("SELECT * FROM pindah_datang where id_reg_pd='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h2> Detail Data Pindah Datang</h2>
		<br>
			<table class="table table-bordered" width="50%">
			  <thead>
				
			  </thead>
			  <tbody>
				<tr>
				  <td width="25%">Nomor Registrasi</td>
				  <td><?php echo $data['no_reg_pd']; ?></td>
				  <td width="20%" rowspan="5" align="center" ><img src="../file/pd/<?php echo $data['foto_pd']; ?>" height="200 px" width="150 px"  ></td>
				</tr>
				<tr>
				  <td>Nama Pelapor</td>
				  <td><?php echo $data['nama_pelapor_pd']; ?></td>
				</tr>
				<tr>
				  <td>NIK</td>
				  <td><?php echo $data['nik_pd']; ?></td>
				</tr>
				<tr>
				  <td>Tanggal Pindah</td>
				  <td><?php echo $data['tanggal_pindah']; ?></td>
				</tr>
				<tr>
				  <td>Tempat tanggal lahir</td>
				  <td><?php echo $data['tempat_lahir_pd']; ?>, <?php echo $data['tanggal_lahir_pd']; ?></td>
				</tr>
				<tr>
				  <td>Jenis Kelamin</td>
				  <td><?php echo $data['jenis_kelamin_pd']; ?></td>
				</tr>
				<tr>
				  <td>Alamat Asal</td>
				  <td colspan="2"><?php echo $data['alamat_asal']; ?></td>
				</tr>
				<tr>
				  <td>Alamat Tujuan</td>
				  <td colspan="2"><?php echo $data['alamat_tujuan']; ?></td>
				</tr>
				<tr>
				  <td>Keterangan Lain</td>
				  <td colspan="2"><?php echo $data['ket_pd']; ?></td>
				</tr>
				<tr>
				  <td></td>
				  <td colspan="2" align="right">
				  	
					<a onclick="return confirm ('Yakin Mau Menghapus');"  href="?p=deleterefpd&id=<?php echo $data['id_reg_pd'];?>" class="btn btn-danger  " role="button" aria-disabled="true"><span data-feather="trash"></span>Delete</a>
					<a href="?p=editrefpd&id=<?php echo $data['id_reg_pd']; ?>" class="btn btn-warning " role="button" aria-disabled="true"><span data-feather="edit"></span>Edit</a>
					<a href="?p=pindah_datang" class="btn btn-info btn-md "><span data-feather="corner-up-left"></span>kembali</a> 
				  </td>
				</tr>
				
			  </tbody>
			</table>
		
		</div>
	</div>
</div>