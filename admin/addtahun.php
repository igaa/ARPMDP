
<form action="" method="post">
<input type="hidden" name="id" value="">
  
   
  <div class="form-group row">
    <label for="nama_tahun" class="col-sm-2 col-form-label">Priode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_tahun" name="nama_tahun" placeholder="Priode Pemerintahan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="status" name="status" value="0" disabled>
    </div>
  </div>
 

  <div class="form-group row">
	<div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
      <button type="submit" name="addtahun" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['addtahun'])){
	$nama_tahun	=$_POST['nama_tahun'];
	$status	=$_POST['status'];



$query = $con-> query("INSERT INTO ref_tahun VALUES('','$nama_tahun','$status')");
if($query){
	echo "<script>alert('sukses simpan'); top.location='?p=refpriode'; </script>";
}else{
	echo "<script>alert('Gagal Simpan'); top.location='?p=refpriode'; </script>";
}
}
?>