<?php 

$query = $con->query("SELECT * FROM pindah_datang where id_reg_pd='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md">
		<h3>Form Edit Data Pindah Datang</h3>
		<br>
			<form action="?p=editpd&id=<?php echo $data['id_reg_pd']; ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="">
				  <div class="form-group row">
					<label for="no_reg_pd" class="col-sm-2 col-form-label">Nomor Registrasi</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="no_reg_pd" name="no_reg_pd" value="<?php echo $data['no_reg_pd'];?>">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="nama_pelapor_pd" class="col-sm-2 col-form-label">Nama Pelapor</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nama_pelapor_pd" name="nama_pelapor_pd" value="<?php echo $data['nama_pelapor_pd'];?>">
					</div>
				  </div>
				   <div class="form-group row">
					<label for="nik_pd" class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nik_pd" name="nik_pd" value="<?php echo $data['nik_pd'];?>">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="tanggal_pindah" class="col-sm-2 col-form-label">Tanggal Pindah</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control" id="tanggal_pindah" name="tanggal_pindah" value="<?php echo $data['tanggal_pindah'];?>">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="tempat_lahir_pd" class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="tempat_lahir_pd" name="tempat_lahir_pd" value="<?php echo $data['tempat_lahir_pd'];?>">
					</div>
				  </div>
				   <div class="form-group row">
					<label for="tanggal_lahir_pd" class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control" id="tanggal_lahir_pd" name="tanggal_lahir_pd" value="<?php echo $data['tanggal_lahir_pd'];?>" >
					</div>
				  </div>
				  
					<div class="form-group row">
					<label for="jenis_kelamin_pd" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
					  <select name="jenis_kelamin_pd" class="form-control">
						<option value="<?php echo $data['jenis_kelamin_pd'];?>"><?php echo $data['jenis_kelamin_pd'];?></option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" id="alamat_asal" name="alamat_asal" value=""><?php echo $data['alamat_asal'];?></textarea>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="alamat_tujuan" class="col-sm-2 col-form-label">Alamat Tujuan</label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" value=""><?php echo $data['alamat_tujuan'];?></textarea>
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="ket_pd" class="col-sm-2 col-form-label">Keterangan Lain-lain</label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" id="ket_pd" name="ket_pd" value=""><?php echo $data['ket_pd'];?></textarea>
					</div>
					</div>
					<div class="form-group row">
						<label for="foto_pd" class="col-sm-2 col-form-label">Foto</label>
						<div class="col-sm-10">
							<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
						  <input type="file" name="foto_pd" id="foto_pd" value="<?php echo $data['foto_pd'];?>">
						</div>
					</div>
				  <div class="form-group row">
					<div class="col-sm-2"> 
					</div>
					<div class="col-sm-8">
					  <button type="submit" name="editpd" class="btn btn-primary">Save</button>
					</div>
				  </div>
			</form>
		
		
		<div>
	</div>
</div>
<br>
<br>


