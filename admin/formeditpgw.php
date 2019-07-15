<?php 

$query = $con->query("SELECT * FROM pegawai where id_pegawai='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h3>Form Edit Data Pindah Datang</h3>
		<br>
		
			<form action="?p=editpgw&id=<?php echo $data['id_pegawai']; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="">
			  <div class="form-group row">
				<label for="nip" class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data['nip']; ?>">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data['jabatan']; ?>">
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="tempat_lahir_pgw" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tempat_lahir_pgw" name="tempat_lahir_pgw" value="<?php echo $data['tempat_lahir_pgw']; ?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="tanggal_lahir_pgw" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tanggal_lahir_pgw" name="tanggal_lahir_pgw" value="<?php echo $data['tanggal_lahir_pgw']; ?>">
				</div>
			  </div>
			  
				<div class="form-group row">
				<label for="jenis_kelamin_pgw" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
				  <select name="jenis_kelamin_pgw" class="form-control">
				  <option value="<?php echo $data['jenis_kelamin_pgw']; ?>"><?php echo $data['jenis_kelamin_pgw']; ?></option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group row">
				<label for="alamat_pgw" class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" id="alamat_pgw" name="alamat_pgw" ><?php echo $data['alamat_pgw']; ?></textarea>
				</div>
			  </div>
			 <div class="form-group row">
				<label for="masa_bhakti" class="col-sm-2 col-form-label">Masa Bakti</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="masa_bhakti" name="masa_bhakti" value="<?php echo $data['masa_bhakti']; ?>">
				</div>
			  </div>
			  

				<div class="form-group row">
					<label for="foto_profil" class="col-sm-2 col-form-label">Foto Profil</label>
					<div class="col-sm-10">
					<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
					<input type="file" name="foto_profil" id="foto_profil" value="<?php echo $data['foto_profil'];?>">
					
					</div>
				</div>
			  <div class="form-group row">
				<div class="col-sm-2"> 
				</div>
				<div class="col-sm-8">
				  <button type="submit" name="editpgw" class="btn btn-primary">Save</button>
				</div>
			  </div>
			</form>
		</div>
	</div>
</div>


