<?php 
if(isset($_GET['p'])){
	$page = $_GET['p'];
	switch ($page) {
		case 'progres':
			include "progres.php";
			break;
		case 'pelayananumum':
			include "pelayananumum.php";
			break;
		case 'detpelumum':
			include "detpelumum.php";
			break;
		default:
			include "../404.php";
			break;
	}
} else{
	include "progres.php";
}
?>