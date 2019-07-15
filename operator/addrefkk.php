<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="">
  <div class="form-group row">
    <label for="no_reg_kkktp" class="col-sm-2 col-form-label">Nomor Registrasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_reg_kkktp" name="no_reg_kkktp" placeholder="Nomor Registrasi">
    </div>
  </div>
     <div class="form-group row">
    <label for="no_kk" class="col-sm-2 col-form-label">Nomor KK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK">
    </div>
  </div>
     <div class="form-group row">
    <label for="no_nik" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_nik" name="no_nik" placeholder="NIK">
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_reg" class="col-sm-2 col-form-label">Tanggal Registrasi</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_reg" name="tanggal_reg" placeholder="Tanggal Registrasis">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Nama Pelapor">
    </div>
	 </div>
<div class="form-group row">
    <label for="tempat_lahir_kkktp" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir_kkktp" name="tempat_lahir_kkktp" placeholder="Tempat Lahir">
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_lahir_kkktp" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_lahir_kkktp" name="tanggal_lahir_kkktp" >
    </div>
  </div>
 
	<div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
    </div>
  </div>
  
 
  
    <div class="form-group row">
    <label for="status_layanan" class="col-sm-2 col-form-label">Layanan</label>
    <div class="col-sm-10">
      <select name="status_layanan" class="form-control">
		<option value="KK">KK</option>
		<option value="KTP">KTP</option>
	  </select>
    </div>
  </div>
   <div class="form-group row">
    <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <select name="ket" class="form-control">
		<option value="Baru">Baru</option>
		<option value="Ubah Data">Ubah Data</option>
		<option value="Ganti">Ganti</option>
	  </select>
    </div>
  </div>

  
	<div class="form-group row">
		<label for="foto" class="col-sm-2 col-form-label">Foto</label>
		<div class="col-sm-10">
		  <input type="file" name="foto" id="foto" placeholder="foto" required>
		</div>
	</div>
  <div class="form-group row">
	<div class="col-sm-2"> 
    </div>
    <div class="col-sm-8">
      <button type="submit" name="addkk" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['addkk'])){
	$no_reg_kkktp	=$_POST['no_reg_kkktp'];
	$no_kk	=$_POST['no_kk'];
	$no_nik	=$_POST['no_nik'];
	$tanggal_reg	=$_POST['tanggal_reg'];
	$nama_pelapor	=$_POST['nama_pelapor'];
	$tempat_lahir_kkktp	=$_POST['tempat_lahir_kkktp'];
	$tanggal_lahir_kkktp	=$_POST['tanggal_lahir_kkktp'];
	$alamat	=$_POST['alamat'];
	$status_layanan	=$_POST['status_layanan'];
	$ket	=$_POST['ket'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotoktp = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "../file/ktpkk/".$fotoktp;

// Proses upload
			if(move_uploaded_file($tmp, $path)){

					$query = $con-> query("INSERT INTO ref_reg_kkktp VALUES('','$no_reg_kkktp','$no_kk','$no_nik','$tanggal_reg','$nama_pelapor','$tempat_lahir_kkktp','$tanggal_lahir_kkktp','$alamat','$status_layanan','$ket','$fotoktp')");
						if($query){
							echo "<script>alert('sukses simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}else{
							echo "<script>alert('Gagal Simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}	
					}else{
			  // Jika gambar gagal diupload, Lakukan :
			  echo "Maaf, Gambar gagal untuk diupload.";
			  echo "<br><a href='?p=pelayanan_ktpkk'>Kembali Ke Form</a>";
			}	
	


}
?>