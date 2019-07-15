<?php 

$query = $con->query("SELECT * FROM pegawai where id_pegawai='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
<h3> Detail Pegawai</h3>
	<div class="row">
		<div class="col-8" align="left">
			<table class="table table-bordered" width="50%">
			  <thead>
				
			  </thead>
			  <tbody >
				<tr height="50 px">
					<td width="40%"> Id Pegawai</td>
					<td><?php echo $data['id_pegawai']; ?></td>
				</tr>
				<tr height="50 px">
					<td>NIP</td>
					<td><?php echo $data['nip']; ?></td>
				</tr>
				<tr height="50 px">
					<td>Nama Pegawai</td>
					<td><?php echo $data['nama_pegawai']; ?></td>
				</tr>
				<tr height="50 px">
					<td>Jabatan</td>
					<td><?php echo $data['jabatan']; ?></td>
				</tr>
				<tr height="50 px">
					<td>Tempat Lahir</td>
					<td><?php echo $data['tempat_lahir_pgw']; ?></td>
				</tr>
				<tr height="50 px">
					<td> Tanggal Lahir</td>
					<td><?php echo $data['tanggal_lahir_pgw']; ?></td>
				</tr>
				<tr height="50 px">
					<td>Jenis Kelamin</td>
					<td><?php echo $data['jenis_kelamin_pgw']; ?></td>
				</tr>
				<tr height="50 px">
					<td>Alamat</td>
					<td><?php echo $data['alamat_pgw']; ?></td>
				</tr>
				
				<tr height="50 px">
					<td>Masa Bhakti</td>
					<td><?php echo $data['masa_bhakti']; ?></td>
				</tr>
				<tr height="50 px">
					<td colspan="2" align="right">
					<a href="?p=editpegawai&id=<?php echo $data['id_pegawai']; ?>" class="btn btn-warning  "><span data-feather="edit"></span>edit</a>  
					<a onclick="return confirm ('Yakin Mau Menghapus');" href="?p=delpegawai&id=<?php echo $data['id_pegawai'];?>" class="btn btn-danger "><span data-feather="trash"></span>hapus</a>
					<a href="?p=refpegawai" class="btn btn-primary "><span data-feather="corner-up-left"></span> kembali</a>
					</td>
				</tr>
				
				
				
				
				
	
				
			  </tbody>
			</table>
		
		</div>
		<div class="col-3">
		<table class="table table-bordered" >
			<tr>
				<td align="center"><img src="../file/pegawai/<?php echo $data['foto_profil']; ?>" height="200 px" width="170 px"  ></td>
			</tr>
		
		</div>
		</table>
	</div>
</div>
<br>
<br>