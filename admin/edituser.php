<?php 

$query = $con->query("SELECT * FROM user where id_user='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<br>
<br>
<form action="" method="post">
<input type="hidden" name="id" value="">
  
   
  <div class="form-group row">
    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $data['nama_user'];?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username'];?>" required>
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
		<option value="<?php echo $data['level'];?>"><?php echo $data['level'];?></option>
		<option value="admin">Admin</option>
		<option value="operator">Operator</option>
		<option value="kepala_desa">Kepala Desa</option>
	  </select>
    </div>
  </div>
  


  <div class="form-group row">
	<div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
      <button type="submit" name="updateuser" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
$id = $_GET['id'];
if (isset($_POST['updateuser'])){
	$nama_user	=$_POST['nama_user'];
	$username	=$_POST['username'];
	$password	=md5 ($_POST['password']);
	$level	=$_POST['level'];



$query = $con-> query("UPDATE user SET nama_user='$nama_user',username='$username',password='$password',level='$level' where id_user ='$id'");
if($query){
	echo "<script>alert('sukses simpan'); top.location='?p=refuser'; </script>";
}else{
	echo "<script>alert('Gagal Simpan'); top.location='?p=refuser'; </script>";
}
}
?>