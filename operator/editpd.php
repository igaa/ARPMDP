<?php
include_once("../koneksi.php");

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
	$no_reg_pd	=$_POST['no_reg_pd'];
	$nama_pelapor_pd=$_POST['nama_pelapor_pd'];
	$nik_pd	=$_POST['nik_pd'];
	$tanggal_pindah	=$_POST['tanggal_pindah'];
	$tempat_lahir_pd	=$_POST['tempat_lahir_pd'];
	$tanggal_lahir_pd	=$_POST['tanggal_lahir_pd'];
	$jenis_kelamin_pd	=$_POST['jenis_kelamin_pd'];
	$alamat_asal	=$_POST['alamat_asal'];
	$alamat_tujuan	=$_POST['alamat_tujuan'];
	$ket_pd	=$_POST['ket_pd'];
	
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto_pd = $_FILES['foto_pd']['name'];
	$tmp = $_FILES['foto_pd']['tmp_name'];
  

	$fotobaru = date('dmYHis').$foto_pd;

	$path = "../file/pd/".$fotobaru;
	
	if(move_uploaded_file($tmp, $path)){
		$query = $con->query("SELECT * FROM pindah_datang where id_reg_pd='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/pd/".$data['foto_pd'])) 
			unlink("../file/pd/".$data['foto_pd']); 
		
		
		$query = $con-> query("UPDATE pindah_datang SET no_reg_pd='$no_reg_pd',nik_pd='$nik_pd',tanggal_pindah='$tanggal_pindah', nama_pelapor_pd='$nama_pelapor_pd',tempat_lahir_pd='$tempat_lahir_pd',tanggal_lahir_pd='$tanggal_lahir_pd',jenis_kelamin_pd='$jenis_kelamin_pd',alamat_asal='$alamat_asal',alamat_tujuan='$alamat_tujuan',ket_pd='$ket_pd', foto_pd='$fotobaru' WHERE id_reg_pd='$id'");
		if($query){
			echo "<script>alert('sukses simpan'); top.location='?p=pindah_datang'; </script>";
			}else{
			echo "<script>alert('Gagal Simpan'); top.location='?p=pindah_datang'; </script>";
			}
	}
	}else{
	$query = $con-> query("UPDATE pindah_datang SET no_reg_pd='$no_reg_pd',nik_pd='$nik_pd',tanggal_pindah='$tanggal_pindah',nama_pelapor_pd='$nama_pelapor_pd',tempat_lahir_pd='$tempat_lahir_pd',tanggal_lahir_pd='$tanggal_lahir_pd',jenis_kelamin_pd='$jenis_kelamin_pd',alamat_asal='$alamat_asal',alamat_tujuan='$alamat_tujuan',ket_pd='$ket_pd' WHERE id_reg_pd='$id'");
		if($query){
			echo "<script>alert('sukses simpan'); top.location='?p=pindah_datang'; </script>";
			}else{
			echo "<script>alert('Gagal Simpan'); top.location='?p=pindah_datang'; </script>";
			}
		}
	
?>
