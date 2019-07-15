<?php 
if(isset($_GET['p'])){
	$page = $_GET['p'];
	switch ($page) {
		case 'home':
			include "../admin/konten.php";
			break;
		case 'user':
			include "user.php";
			break;
		case 'siswa':
			include "siswa.php";
			break;
		case 'pindah_datang':
			include "../admin/P_D.php";
			break;
		case 'pelayanan_umum':
			include "../admin/P_U.php";
			break;
		case 'pelayanan_ktpkk':
			include "../admin/kk_ktp.php";
			break;
		case 'editrefumum':
			include "editrefumum.php";
			break;
		case 'deleterefumum':
			include "deleterefumum.php";
			break;
		case 'detailrefumum':
			include "detailrefumum.php";
			break;
		case 'cetakrefumum':
			include "cetak.php";
			break;
		case 'detailrefpd':
			include "detrefpd.php";
			break;
		case 'editrefpd':
			include "editrefpd.php";
			break;
		case 'deleterefpd':
			include "delrefpd.php";
			break;
		
		case 'editpd':
			include "editpd.php";
			break;
		case 'formeditkk':
			include "formeditkk.php";
			break;
		case 'editkk':
			include "editkk.php";
			break;
		case 'deleterefkk':
			include "deleterefkk.php";
			break;
		case 'detrefkk':
			include "detrefkk.php";
			break;
		default:
			include "../404.php";
			break;
	}
} else{
	include "../admin/konten.php";
}
?>