<?php 

$query = $con->query("SELECT * FROM refpelayananumum where id_reg='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md">
		<h3>Form Edit Data Pelayanan Umum</h3>
		<br>
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id_reg'];?>">
			  <div class="form-group row">
				<label for="no_reg" class="col-sm-2 col-form-label">Nomor Registrasi</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="no_reg" name="no_reg" value="<?php echo $data['no_reg'];?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="nik" class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik'];?>">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="nama" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>">
				</div>
			  </div>
			  
				<div class="form-group row">
				<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
				  <select name="jenis_kelamin" class="form-control">
					<option value="<?php echo $data['jenis_kelamin'];?>"><?php echo $data['jenis_kelamin'];?></option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama'];?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="perkerjaan" class="col-sm-2 col-form-label">Perkerjaan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="perkerjaan" name="perkerjaan" value="<?php echo $data['perkerjaan'];?>">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" id="alamat" name="alamat" value=""><?php echo $data['alamat'];?></textarea>
				</div>
			  </div>
			  <div class="form-group row">
				<label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?php echo $data['keperluan'];?>">
				</div>
			  </div>
			   <div class="form-group row">
				<label for="ket_lain" class="col-sm-2 col-form-label">Keterangan Lain-lain</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" id="ket_lain" name="ket_lain" value=""><?php echo $data['ket_lain'];?></textarea>
				</div>
			  </div>
			   <div class="form-group row">
				<label for="tanggal_buat" class="col-sm-2 col-form-label">Berlaku Tanggal</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="tanggal_buat" name="tanggal_buat" value="<?php echo $data['tanggal_buat'];?>">
				</div>
			  </div>
			  <div class="form-group row">
				  <div class="col-sm-2">
					  
					</div>
				<div class="col-sm-8">
				  <button type="submit" name="update" class="btn btn-success">Update</button>
				</div>
			  </div>
			</form>
		</div>
	</div>
</div>
<br>
<br>
<?php
$id = $_GET['id'];
if (isset($_POST['update'])){
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


$query = $con-> query("UPDATE refpelayananumum SET no_reg='$no_reg',nik='$nik',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',perkerjaan='$perkerjaan',alamat='$alamat',keperluan='$keperluan',ket_lain='$ket_lain',tanggal_buat='$tanggal_buat' WHERE id_reg='$id'");
if($query){
	echo "<script>alert('sukses Update'); top.location='?p=pelayanan_umum'; </script>";
}else{
	echo "<script>alert('Gagal Update'); top.location='?p=pelayanan_umum'; </script>";
}
}
?>