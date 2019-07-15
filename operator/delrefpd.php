<?php
// include database connection file
include_once("../koneksi.php");

$id = $_GET['id'];

$query = $con->query("SELECT * FROM pindah_datang where id_reg_pd='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/pd/".$data['foto_pd'])) 
			unlink("../file/pd/".$data['foto_pd']); 

$query=$con->query("DELETE FROM pindah_datang WHERE id_reg_pd='$id'");

if($query){
	echo "<script>alert('Sukses Hapus'); top.location='?p=pindah_datang'; </script>";
}else{
	echo "<script>alert('Gagal Hapus'); top.location='?p=pindah_datang'; </script>";
}
?>