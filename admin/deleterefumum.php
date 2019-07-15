<?php
// include database connection file
include_once("../koneksi.php");

$id = $_GET['id'];

$query=$con->query("DELETE FROM refpelayananumum WHERE id_reg='$id'");

if($query){
	echo "<script>alert('Sukses Hapus'); top.location='?p=pelayanan_umum'; </script>";
}else{
	echo "<script>alert('Gagal Hapus'); top.location='?p=pelayanan_umum'; </script>";
}
?>