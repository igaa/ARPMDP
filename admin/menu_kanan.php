<?php 
if(isset($_GET['p'])){
	$page = $_GET['p'];
	switch ($page) {
		case 'home':
			include "konten.php";
			break;
		case 'pindah_datang':
			include "P_D.php";
			break;
		case 'pelayanan_umum':
			include "P_U.php";
			break;
		case 'pelayanan_ktpkk':
			include "kk_ktp.php";
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
		case 'refuser':
			include "refpengguna.php";
			break;
		case 'edituser':
			include "edituser.php";
			break;
		case 'deluser':
			include "deluser.php";
			break;
		case 'refpriode':
			include "reftahun.php";
			break;
		case 'ubahtahun':
			include "ubahtahun.php";
			break;
		case 'nonaktif':
			include "nonaktiftahun.php";
			break;
		case 'refpegawai':
			include "pegawai.php";
			break;
		case 'editpegawai':
			include "formeditpgw.php";
			break;
		case 'editpgw':
			include "editpgw.php";
			break;
		case 'detpegawai':
			include "detpegawai.php";
			break;
		case 'delpegawai':
			include "delpegawai.php";
			break;
		default:
			include "../404.php";
			break;
	}
}else{
	include "konten.php";
}
?>