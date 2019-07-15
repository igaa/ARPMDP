<?php
$id 	=$_GET['id'];

$query1=$con->query("UPDATE ref_tahun SET status='1' WHERE id_tahun='$id'");
$query2=$con->query("UPDATE ref_tahun SET status='0' WHERE id_tahun!='$id'");

if($query1){
	echo "<script> alert('Sukses Ubah Status'); top.location='?p=refpriode'; </script>";
}else{
	echo "<script> alert('Gagal Ubah Status'); top.location='?p=refpriode'; </script>";
}

?>