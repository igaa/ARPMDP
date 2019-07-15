<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="">
  <div class="form-group row">
    <label for="no_reg_pd" class="col-sm-2 col-form-label">Nomor Registrasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_reg_pd" name="no_reg_pd" placeholder="Nomor Registrasi">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pelapor_pd" class="col-sm-2 col-form-label">Nama Pelapor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_pelapor_pd" name="nama_pelapor_pd" placeholder="Nama Pelapor">
    </div>
  </div>
   <div class="form-group row">
    <label for="nik_pd" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nik_pd" name="nik_pd" placeholder="NIK">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_pindah" class="col-sm-2 col-form-label">Tanggal Pindah</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_pindah" name="tanggal_pindah" placeholder="Tanggal Pindah">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat_lahir_pd" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir_pd" name="tempat_lahir_pd" placeholder="Tempat Lahir">
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_lahir_pd" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_lahir_pd" name="tanggal_lahir_pd" >
    </div>
  </div>
  
    <div class="form-group row">
    <label for="jenis_kelamin_pd" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jenis_kelamin_pd" class="form-control">
		<option value="Laki-Laki">Laki-Laki</option>
		<option value="Perempuan">Perempuan</option>
	  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Alamat Asal"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_tujuan" class="col-sm-2 col-form-label">Alamat Tujuan</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" placeholder="Alamat Tujuan"></textarea>
    </div>
  </div>
  
   <div class="form-group row">
    <label for="ket_pd" class="col-sm-2 col-form-label">Keterangan Lain-lain</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="ket_pd" name="ket_pd" placeholder="Keterangan Lain-lain"></textarea>
    </div>
	</div>
	<div class="form-group row">
		<label for="foto_pd" class="col-sm-2 col-form-label">Foto</label>
		<div class="col-sm-10">
		  <input type="file" name="foto_pd" id="foto_pd" placeholder="foto" required>
		</div>
	</div>
  <div class="form-group row">
	<div class="col-sm-2"> 
    </div>
    <div class="col-sm-8">
      <button type="submit" name="addpd" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['addpd'])){
	$no_reg_pd	=$_POST['no_reg_pd'];
	$nama_pelapor_pd	=$_POST['nama_pelapor_pd'];
	$nik_pd	=$_POST['nik_pd'];
	$tanggal_pindah	=$_POST['tanggal_pindah'];
	$tempat_lahir_pd	=$_POST['tempat_lahir_pd'];
	$tanggal_lahir_pd	=$_POST['tanggal_lahir_pd'];
	$jenis_kelamin_pd	=$_POST['jenis_kelamin_pd'];
	$alamat_asal	=$_POST['alamat_asal'];
	$alamat_tujuan	=$_POST['alamat_tujuan'];
	$ket_pd	=$_POST['ket_pd'];
	$foto_pd = $_FILES['foto_pd']['name'];
	$tmp = $_FILES['foto_pd']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto_pd;

// Set path folder tempat menyimpan fotonya
$path = "../file/pd/".$fotobaru;

// Proses upload
			if(move_uploaded_file($tmp, $path)){

					$query = $con-> query("INSERT INTO pindah_datang VALUES('','$no_reg_pd','$nama_pelapor_pd','$nik_pd','$tanggal_pindah','$tempat_lahir_pd','$tanggal_lahir_pd','$jenis_kelamin_pd','$alamat_asal','$alamat_tujuan','$ket_pd','$fotobaru')");
						if($query){
							echo "<script>alert('sukses simpan'); top.location='?p=pindah_datang'; </script>";
						}else{
							echo "<script>alert('Gagal Simpan'); top.location='?p=pindah_datang'; </script>";
						}	
					}else{
			  // Jika gambar gagal diupload, Lakukan :
			  echo "Maaf, Gambar gagal untuk diupload.";
			  echo "<br><a href='?p=pindah_datang'>Kembali Ke Form</a>";
			}	
	


}
?>