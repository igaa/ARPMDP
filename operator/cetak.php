
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

<title>Aplikasi Registrasi Pelayanan Masyarakat</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
	<link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	
  </head>


<body>

<?php 
include_once("../koneksi.php");

$query = $con->query("SELECT * FROM refpelayananumum where id_reg='".$_GET['id']."'");

$data=$query->fetch_array();
?>
<table  width="95%"  align="center">
<tr>
<td align="center" height="200 px">

<img src="../images/header.png" width="100%" height="100%">
</td>

</tr>
</table>


<table style="width:90%" border="0" align="center"  >
 
  <tr>
    <td width="25%">Kode Desa : 556565</td>
	<td width="2%" align="center"></td>
    <td width="20%"></td> 
    <td ></td>
	<td ></td>
  </tr>
  <tr>
    <td  colspan="5" align="center">
	<b><u>SURAT KETERANGAN</u></b>
	<p>Nomor Surat : <?php echo $data['no_reg'];?></p>
	</td> 
  </tr>
  <tr >
    <td></td>
	<td>1.</td>
    <td>Nik </td> 
    <td>:</td>
	<td><?php echo $data['nik'];?></td>
  </tr>
   <tr>
    <td></td>
	<td>2.</td>
    <td>Nama</td> 
    <td>:</td>
	<td><?php echo $data['nama'];?></td>
  </tr>
   <tr>
    <td></td>
	<td>3.</td>
    <td>Tempat,Tanggal Lahir</td> 
    <td>:</td>
	<td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tanggal_lahir'];?></td>
  </tr>
   <tr>
    <td></td>
	<td>4.</td>
    <td>Jenis Kelamin</td> 
    <td>:</td>
	<td><?php echo $data['jenis_kelamin'];?></td>
  </tr>
   <tr>
    <td></td>
	<td>5.</td>
    <td>Agama</td> 
    <td>:</td>
	<td><?php echo $data['agama'];?></td>
  </tr>
   <tr>
    <td></td>
	<td>6.</td>
    <td>Perkerjaan</td> 
    <td>:</td>
	<td><?php echo $data['perkerjaan'];?></td>
  </tr>
  <tr>
    <td></td>
	<td>7.</td>
    <td>Alamat</td> 
    <td>:</td>
	<td><?php echo $data['alamat'];?></td>
  </tr>
  <tr>
    <td></td>
	<td>8.</td>
    <td>Berlaku Mulai</td> 
    <td>:</td>
	<td><?php echo $data['tanggal_buat'];?></td>
  </tr>
  <tr>
    <td></td>
	<td>9.</td>
    <td>Keperluan</td> 
    <td>:</td>
	<td><?php echo $data['keperluan'];?></td>
  </tr>
  <tr height="20">
    <td></td>
	<td >10.</td>
    <td align="top">Keterangan lain Lain </td> 
    <td>:</td>
	<td rowspan="4"><?php echo $data['ket_lain'];?></td>
  </tr>
  <tr >
    <td></td>
	<td ></td>
    <td></td> 
    <td> </td>
	
  </tr>
 
 
</table>
<br>
<br>
<br>

<table style="width:90%" border="0" align="center">

 <tr align="center">
  <td></td>
  <td></td>
  <td align="right">
		<table border="0" style="width:70%">
			<tr>
				<td>Dibuat di</td>
				<td>:</td>
				<td> Pancur</td>
			</tr>
			<tr>
				<td>Pada tanggal </td>
				<td>:</td>
				<td> <?php echo $data['tanggal_buat'];?></td>
			</tr>
		</table>
  </td>
  </tr>
<tr>
    <td width="15%"></td>
	<td align="center" >
	<p >Tanda Tangan pemegang</p>

	
	
	</td>
   
  
    <td align="center">
	 <?php 
		include_once("../koneksi.php");

		$query = $con->query("SELECT nama_pegawai,nip, jabatan FROM pegawai WHERE jabatan='Kepala Desa'");

		$data=$query->fetch_array();
		?>
	<p><?php echo $data['jabatan'];?> Pancur</p>
	
	
	
	
	</td>
  </tr>
  
  <tr align="center">
  <td></td>
  <td>
  <br>
	<br>
	<br>
  <?php 
include_once("../koneksi.php");

$query = $con->query("SELECT * FROM refpelayananumum where id_reg='".$_GET['id']."'");

$data=$query->fetch_array();
?>
  (<b><?php echo $data['nama'];?></b>)</td>
  <td>
  <br>
	<br>
	<br>
  <?php 
		include_once("../koneksi.php");

		$query = $con->query("SELECT nama_pegawai,nip, jabatan FROM pegawai WHERE jabatan='Kepala Desa'");

		$data=$query->fetch_array();
		?>
  (<b><u><?php echo $data['nama_pegawai'];?></u></b>)</td>
  </tr>
  <tr align="center">
  <td></td>
  <td></td>
  <td>Nip : <?php echo $data['nip'];?></td>
  </tr>
 
 
  
</table>

<br>
<br>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script>
	window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="../assets/js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="../assets/js/Chart.min.js"></script>
	
	<script>
		$(document).ready(function() {
		$('#example').DataTable();
			} );
	</script>
	<script>
		window.print();
	</script>
  </body>
</html>

