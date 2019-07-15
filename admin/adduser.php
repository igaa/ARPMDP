
<form action="" method="post">
<input type="hidden" name="id" value="">
  
   
  <div class="form-group row">
    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>
  </div>
 
   <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  
    <div class="form-group row">
    <label for="level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <select name="level" class="form-control" required>
		<option value=" " >Pilih</option>
		<option value="admin">Admin</option>
		<option value="operator">Operator</option>
		<option value="kepala_desa">Kepala Desa</option>
	  </select>
	  </select>
    </div>
  </div>
  


  <div class="form-group row">
	<div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
      <button type="submit" name="adduser" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['adduser'])){
	$nama_user	=$_POST['nama_user'];
	$username	=$_POST['username'];
	$password	=md5 ($_POST['password']);
	$level	=$_POST['level'];



$query = $con-> query("INSERT INTO user VALUES('','$nama_user','$username','$password','$level')");
if($query){
	echo "<script>alert('sukses simpan'); top.location='?p=refuser'; </script>";
}else{
	echo "<script>alert('Gagal Simpan'); top.location='?p=refuser'; </script>";
}
}
?>