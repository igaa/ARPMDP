<?php
// include database connection file
include_once("../koneksi.php");

$id = $_GET['id'];

$query = $con->query("SELECT * FROM ref_reg_kkktp where id_reg_kkktp='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/ktpkk/".$data['foto'])) 
			unlink("../file/ktpkk/".$data['foto']); 

$query=$con->query("DELETE FROM ref_reg_kkktp WHERE id_reg_kkktp='$id'");

if($query){
	echo "<script>alert('Sukses Hapus'); top.location='?p=pelayanan_ktpkk'; </script>";
}else{
	echo "<script>alert('Gagal Hapus'); top.location='?p=pelayanan_ktpkk'; </script>";
}
?>