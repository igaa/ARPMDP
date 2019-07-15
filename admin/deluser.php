<?php
// include database connection file
include_once("../koneksi.php");

$id = $_GET['id'];

$query=$con->query("DELETE FROM user WHERE id_user='$id'");

if($query){
	echo "<script>alert('Sukses Hapus'); top.location='?p=refuser'; </script>";
}else{
	echo "<script>alert('Gagal Hapus'); top.location='?p=refuser'; </script>";
}
?>