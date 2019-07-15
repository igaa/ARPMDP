<?php
include_once("../koneksi.php");

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
	$nip	=$_POST['nip'];
	$nama_pegawai	=$_POST['nama_pegawai'];
	$jabatan	=$_POST['jabatan'];
	$tempat_lahir_pgw	=$_POST['tempat_lahir_pgw'];
	$tanggal_lahir_pgw	=$_POST['tanggal_lahir_pgw'];
	$jenis_kelamin_pgw	=$_POST['jenis_kelamin_pgw'];
	$alamat_pgw	=$_POST['alamat_pgw'];
	$masa_bhakti	=$_POST['masa_bhakti'];
	
	
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto_profil = $_FILES['foto_profil']['name'];
	$tmp = $_FILES['foto_profil']['tmp_name'];
  

	$fotobaru = date('dmYHis').$foto_profil;

	$path = "../file/pegawai/".$fotobaru;
	
	if(move_uploaded_file($tmp, $path)){
		$query = $con->query("SELECT * FROM pegawai where id_pegawai='".$_GET['id']."'");

		$data=$query->fetch_array();
		if(is_file("../file/pegawai/".$data['foto_profil'])) 
			unlink("../file/pegawai/".$data['foto_profil']); 
		
		$query = $con-> query("UPDATE pegawai SET nip='$nip',nama_pegawai='$nama_pegawai',jabatan='$jabatan',tempat_lahir_pgw='$tempat_lahir_pgw',tanggal_lahir_pgw='$tanggal_lahir_pgw',jenis_kelamin_pgw='$jenis_kelamin_pgw',alamat_pgw='$alamat_pgw',masa_bhakti='$masa_bhakti',foto_profil='$fotobaru' WHERE id_pegawai='$id'");
		if($query){
				echo "<script>alert('sukses simpan'); top.location='?p=refpegawai'; </script>";
				}else{
						echo "<script>alert('Gagal Simpan'); top.location='?p=refpegawai'; </script>";
					}
	}
	}else{
	$query = $con-> query("UPDATE pegawai SET nip='$nip',nama_pegawai='$nama_pegawai',jabatan='$jabatan',tempat_lahir_pgw='$tempat_lahir_pgw',tanggal_lahir_pgw='$tanggal_lahir_pgw',jenis_kelamin_pgw='$jenis_kelamin_pgw',alamat_pgw='$alamat_pgw',masa_bhakti='$masa_bhakti' WHERE id_pegawai='$id'");
		if($query){
			echo "<script>alert('sukses simpan'); top.location='?p=refpegawai'; </script>";
				}else{
				echo "<script>alert('Gagal Simpan'); top.location='?p=refpegawai'; </script>";
				}
		}
	
?>
