<?php
// include database connection file
include_once("../koneksi.php");

$id = $_GET['id'];

$query = $con->query("SELECT * FROM pegawai where id_pegawai='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/pegawai/".$data['foto_profil'])) 
			unlink("../file/pegawai/".$data['foto_profil']); 

$query=$con->query("DELETE FROM pegawai WHERE id_pegawai='$id'");

if($query){
	echo "<script>alert('Sukses Hapus'); top.location='?p=refpegawai'; </script>";
}else{
	echo "<script>alert('Gagal Hapus'); top.location='?p=refpegawai'; </script>";
}
?>