<?php
include_once("../koneksi.php");

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
	$no_reg_kkktp	=$_POST['no_reg_kkktp'];
	$no_kk	=$_POST['no_kk'];
	$no_nik	=$_POST['no_nik'];
	$tanggal_reg	=$_POST['tanggal_reg'];
	$nama_pelapor	=$_POST['nama_pelapor'];
	$tempat_lahir_kkktp	=$_POST['tempat_lahir_kkktp'];
	$tanggal_lahir_kkktp	=$_POST['tanggal_lahir_kkktp'];
	$alamat	=$_POST['alamat'];
	$status_layanan	=$_POST['status_layanan'];
	$ket	=$_POST['ket'];
	
	
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
  

	$fotoktp = date('dmYHis').$foto;

	$path = "../file/ktpkk/".$fotoktp;
	
	if(move_uploaded_file($tmp, $path)){
		$query = $con->query("SELECT * FROM ref_reg_kkktp where id_reg_kkktp='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/ktpkk/".$data['foto_pd'])) 
			unlink("../file/ktpkk/".$data['foto_pd']); 
		
		
		$query = $con-> query("UPDATE ref_reg_kkktp SET no_reg_kkktp='$no_reg_kkktp',no_kk='$no_kk',no_nik='$no_nik',tanggal_reg='$tanggal_reg',nama_pelapor='$nama_pelapor',tempat_lahir_kkktp='$tempat_lahir_kkktp',tanggal_lahir_kkktp='$tanggal_lahir_kkktp',alamat='$alamat',status_layanan='$status_layanan',ket='$ket',foto='$fotoktp' WHERE id_reg_kkktp='$id'");
						if($query){
							echo "<script>alert('sukses simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}else{
							echo "<script>alert('Gagal Simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}	
	}else{
			  // Jika gambar gagal diupload, Lakukan :
			  echo "Maaf, Gambar gagal untuk diupload.";
			  echo "<br><a href='?p=pelayanan_ktpkk'>Kembali Ke Form</a>";
			}	
	}else{
	$query = $con-> query("UPDATE ref_reg_kkktp SET no_reg_kkktp='$no_reg_kkktp',no_kk='$no_kk',no_nik='$no_nik',tanggal_reg='$tanggal_reg',nama_pelapor='$nama_pelapor',tempat_lahir_kkktp='$tempat_lahir_kkktp',tanggal_lahir_kkktp='$tanggal_lahir_kkktp',alamat='$alamat',status_layanan='$status_layanan',ket='$ket' WHERE id_reg_kkktp='$id'");
						if($query){
							echo "<script>alert('sukses simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}else{
							echo "<script>alert('Gagal Simpan'); top.location='?p=pelayanan_ktpkk'; </script>";
						}	
		}
	
?>
