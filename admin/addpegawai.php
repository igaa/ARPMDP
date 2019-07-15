<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai">
    </div>
  </div>
   <div class="form-group row">
    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="tempat_lahir_pgw" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir_pgw" name="tempat_lahir_pgw" placeholder="Tempat Lahir">
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_lahir_pgw" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_lahir_pgw" name="tanggal_lahir_pgw" >
    </div>
  </div>
  
    <div class="form-group row">
    <label for="jenis_kelamin_pgw" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jenis_kelamin_pgw" class="form-control">
		<option value="Laki-Laki">Laki-Laki</option>
		<option value="Perempuan">Perempuan</option>
	  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pgw" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat_pgw" name="alamat_pgw" placeholder="Alamat Asal"></textarea>
    </div>
  </div>
 <div class="form-group row">
    <label for="masa_bhakti" class="col-sm-2 col-form-label">Masa Bakti</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="masa_bhakti" name="masa_bhakti" placeholder="Masa Bhakti">
    </div>
  </div>
  

	<div class="form-group row">
		<label for="foto_profil" class="col-sm-2 col-form-label">Foto Profil</label>
		<div class="col-sm-10">
		  <input type="file" name="foto_profil" id="foto_profil" placeholder="Foto">
		</div>
	</div>
  <div class="form-group row">
	<div class="col-sm-2"> 
    </div>
    <div class="col-sm-8">
      <button type="submit" name="addpgw" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['addpgw'])){
	$nip	=$_POST['nip'];
	$nama_pegawai	=$_POST['nama_pegawai'];
	$jabatan	=$_POST['jabatan'];
	$tempat_lahir_pgw	=$_POST['tempat_lahir_pgw'];
	$tanggal_lahir_pgw	=$_POST['tanggal_lahir_pgw'];
	$jenis_kelamin_pgw	=$_POST['jenis_kelamin_pgw'];
	$alamat_pgw	=$_POST['alamat_pgw'];
	$masa_bhakti	=$_POST['masa_bhakti'];
	$foto_profil = $_FILES['foto_profil']['name'];
	$tmp = $_FILES['foto_profil']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto_profil;

// Set path folder tempat menyimpan fotonya
$path = "../file/pegawai/".$fotobaru;

// Proses upload
			if(move_uploaded_file($tmp, $path)){

					$query = $con-> query("INSERT INTO pegawai VALUES('','$nip','$nama_pegawai','$jabatan','$tempat_lahir_pgw','$tanggal_lahir_pgw','$jenis_kelamin_pgw','$alamat_pgw','$masa_bhakti','$fotobaru')");
						if($query){
							echo "<script>alert('sukses simpan'); top.location='?p=refpegawai'; </script>";
						}else{
							echo "<script>alert('Gagal Simpan'); top.location='?p=refpegawai'; </script>";
						}	
					}else{
			  // Jika gambar gagal diupload, Lakukan :
			  echo "Maaf, Gambar gagal untuk diupload.";
			  echo "<br><a href='?p=refpegawai'>Kembali Ke Form</a>";
			}	
	


}
?>