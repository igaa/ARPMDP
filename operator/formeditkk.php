<?php 

$query = $con->query("SELECT * FROM ref_reg_kkktp where id_reg_kkktp='".$_GET['id']."'");

$data=$query->fetch_array();

?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h3>Form Edit Data KK KTP</h3>
		<br>
		<form action="?p=editkk&id=<?php echo $data['id_reg_kkktp']; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="">
			  <div class="form-group row">
				<label for="no_reg_kkktp" class="col-sm-2 col-form-label">Nomor Registrasi</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="no_reg_kkktp" name="no_reg_kkktp" value="<?php echo $data['no_reg_kkktp']; ?>">
				</div>
			  </div>
				 <div class="form-group row">
				<label for="no_kk" class="col-sm-2 col-form-label">Nomor KK</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $data['no_kk']; ?>">
				</div>
			  </div>
				 <div class="form-group row">
				<label for="no_nik" class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="no_nik" name="no_nik" value="<?php echo $data['no_nik']; ?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="tanggal_reg" class="col-sm-2 col-form-label">Tanggal Registrasi</label>
				<div class="col-sm-10">
				  <input type="date" class="form-control" id="tanggal_reg" name="tanggal_reg" value="<?php echo $data['tanggal_reg']; ?>">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" value="<?php echo $data['nama_pelapor']; ?>">
				</div>
				 </div>
			<div class="form-group row">
				<label for="tempat_lahir_kkktp" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tempat_lahir_kkktp" name="tempat_lahir_kkktp" value="<?php echo $data['tempat_lahir_kkktp']; ?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="tanggal_lahir_kkktp" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
				  <input type="date" class="form-control" id="tanggal_lahir_kkktp" name="tanggal_lahir_kkktp" value="<?php echo $data['tanggal_lahir_kkktp']; ?>">
				</div>
			  </div>
			 
				<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" id="alamat" name="alamat" ><?php echo $data['alamat']; ?></textarea>
				</div>
			  </div>
			  
			 
			  
				<div class="form-group row">
				<label for="status_layanan" class="col-sm-2 col-form-label">Layanan</label>
				<div class="col-sm-10">
				  <select name="status_layanan" class="form-control">
				  <option value="<?php echo $data['status_layanan'];?>"><?php echo $data['status_layanan'];?></option>
					<option value="KK">KK</option>
					<option value="KTP">KTP</option>
				  </select>
				</div>
			  </div>
			   <div class="form-group row">
				<label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-10">
				  <select name="ket" class="form-control">
				  <option value="<?php echo $data['ket'];?>"><?php echo $data['ket'];?></option>
					<option value="Baru">Baru</option>
					<option value="Ubah Data">Ubah Data</option>
					<option value="Ganti">Ganti</option>
				  </select>
				</div>
			  </div>

			  
				<div class="form-group row">
					<label for="foto" class="col-sm-2 col-form-label">Foto</label>
					<div class="col-sm-10">
					  <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
					  <input type="file" name="foto" id="foto" value="<?php echo $data['foto'];?>">
					</div>
				</div>
			  <div class="form-group row">
				<div class="col-sm-2"> 
				</div>
				<div class="col-sm-8">
				  <button type="submit" name="edit" class="btn btn-primary">Save</button>
				</div>
			  </div>
			</form>
		
		</div>
	</div>
</div>
