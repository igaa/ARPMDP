<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if (!isset($_SESSION['operator'])){
	header('location:../index.php');
} else {

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Halaman Operator</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
	<link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='../assets/css/all.css' >
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #A90808;">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">A.R.P.M Desa Pancur</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a  class="btn btn-outline-warning" href="../keluar.php"><span data-feather="lock"></span> Keluar</a>
        </li>
      </ul>
    </nav>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col">
		
		</div>
		<div class="col-8" align="center">
		
		 <main role="main" class="inner cover">
			<h1 class="cover-heading">Hai! Operator</h1>
			<p class="lead">Selamat datang di Aplikasi Registrasi Pelayanan Masyarakat (A.R.P.M) Desa Pancur. Selamat Berkerja dan Semoga Harimu Menyenangkan.</p>
			<p class="lead">
			  <a href="beranda.php" class="btn btn-lg btn-primary">Start</a>
			</p>
		 </main>
		
		</div>
		<div class="col"></div>
	</div>
</div>


	

    <!-- Bootstrap core JavaScript
    ================================================== -->
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
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
<?php 
}
?>