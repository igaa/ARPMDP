
<form action="" method="post">
<input type="hidden" name="id" value="">
  <div class="form-group row">
    <label for="no_reg" class="col-sm-2 col-form-label">Nomor Registrasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_reg" name="no_reg" placeholder="Nomor Registrasi">
    </div>
  </div>
   <div class="form-group row">
    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" >
    </div>
  </div>
  
    <div class="form-group row">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jenis_kelamin" class="form-control">
		<option value="Laki-Laki">Laki-Laki</option>
		<option value="Perempuan">Perempuan</option>
	  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
    </div>
  </div>
   <div class="form-group row">
    <label for="perkerjaan" class="col-sm-2 col-form-label">Perkerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="perkerjaan" name="perkerjaan" placeholder="Perkerjaan">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan">
    </div>
  </div>
   <div class="form-group row">
    <label for="ket_lain" class="col-sm-2 col-form-label">Keterangan Lain-lain</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="ket_lain" name="ket_lain" placeholder="Keterangan Lain-lain"></textarea>
    </div>
  </div>
   <div class="form-group row">
    <label for="tanggal_buat" class="col-sm-2 col-form-label">Tanggal Update</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_buat" name="tanggal_buat" >
    </div>
  </div>
  <div class="form-group row">
	<div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
      <button type="submit" name="addumum" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['addumum'])){
	$no_reg	=$_POST['no_reg'];
	$nik	=$_POST['nik'];
	$nama	=$_POST['nama'];
	$tempat_lahir	=$_POST['tempat_lahir'];
	$tanggal_lahir	=$_POST['tanggal_lahir'];
	$jenis_kelamin	=$_POST['jenis_kelamin'];
	$agama	=$_POST['agama'];
	$perkerjaan	=$_POST['perkerjaan'];
	$alamat	=$_POST['alamat'];
	$keperluan	=$_POST['keperluan'];
	$ket_lain	=$_POST['ket_lain'];
	$tanggal_buat	=$_POST['tanggal_buat'];


$query = $con-> query("INSERT INTO refpelayananumum VALUES('','$no_reg','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$perkerjaan','$alamat','$keperluan','$ket_lain','$tanggal_buat')");
if($query){
	echo "<script>alert('sukses simpan'); top.location='?p=pelayanan_umum'; </script>";
}else{
	echo "<script>alert('Gagal Simpan'); top.location='?p=pelayanan_umum'; </script>";
}
}
?>