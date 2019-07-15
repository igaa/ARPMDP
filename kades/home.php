<?php
error_reporting(0);
session_start();
include "../koneksi.php";
if (!isset($_SESSION['admin'])){
	header('location:../index.php');
} else {

?>
<?php
$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
$data=$query->fetch_array();
$a="status";
$b="nama_tahun";

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Halaman Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
	<link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='../assets/css/all.css' >
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background-color: #1A5675;">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">A.R.P.M Desa Pancur</a>
 
    </nav>
  
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-white sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="?p=progres">
                  <span data-feather="bar-chart-2"></span>
                  Dashbord <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=pelayananumum">
                  <span data-feather="file"></span>
                  Pelayanan Umum
                </a>
              </li>
			  
             
            </ul>
			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Opsi</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link active" href="../keluar.php">
                  <span data-feather="lock"></span>
                  Logout
                </a>
              </li>
           
            </ul>
                      
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php include "menu_kanan.php"; ?>
		  
        </main>
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
	
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
				<?php 
			
				$query0 = $con->query("SELECT YEAR(tanggal_buat) AS tahun, MONTH(tanggal_buat) AS bulan, COUNT(*) AS jumlah_bulanan FROM refpelayananumum  WHERE YEAR(tanggal_buat)='$data[$b]' GROUP BY MONTH(tanggal_buat) ");
				$i=1;
				while ($data=$query0->fetch_array()){
				?>		
					"<?php
					$nama_bln=$data['bulan'];
					if ($nama_bln==1){
						echo "Januari";
					}else if ($nama_bln==2){
						echo "Febuari";
					}else if ($nama_bln==3){
						echo "Maret";
					}else if ($nama_bln==4){
						echo "April";
					}else if ($nama_bln==5){
						echo "Mei";
					}else if ($nama_bln==6){
						echo "Juni";
					}else if ($nama_bln==7){
						echo "Juli";
					}else if ($nama_bln==8){
						echo "Agustus";
					}else if ($nama_bln==9){
						echo "September";
					}else if ($nama_bln==10){
						echo "Oktober";
					}else if ($nama_bln==11){
						echo "November";
					}else if ($nama_bln==12){
						echo "Desember";
					}
					
					?>",	
				<?php	
					$i++;
				}
				
				
				?>	
				
				],
				datasets: [{
					label: '',
					data: [
		
<?php 

				$query1 = $con->query("SELECT MONTH(tanggal_buat) AS bulan, COUNT(*) AS jumlah_bulanan FROM refpelayananumum GROUP BY MONTH(tanggal_buat)");
				$i=1;
				while ($data=$query1->fetch_array()){
				?>		
					"<?php echo $data['jumlah_bulanan'];?>",	
				<?php	
					$i++;
				}
				
				
				?>		
		
				
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(150, 172, 19, 0.2)',
					'rgba(300, 350, 70, 0.2)',
					'rgba(350, 50, 70, 0.2)',
					'rgba(180, 60, 200, 0.2)',
					'rgba(90, 60, 250, 0.2)',
					'rgba(60, 80, 600, 0.2)',
					'rgba(160, 220, 100, 0.2)',
					'rgba(10, 220, 150, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(150, 172, 19, 1)',
					'rgba(300, 20, 50, 1)',
					'rgba(350, 50, 70, 1)',
					'rgba(180, 60, 200, 1)',
					'rgba(90, 60, 250, 1)',
					'rgba(60, 80, 600, 1)',
					'rgba(160, 220, 100, 1)',
					'rgba(10, 220, 150, 1)',
					
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<script>
      var ctx = document.getElementById("myChart1");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
		  <?php 
				$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
				$data=$query->fetch_array();
				$a="status";
				$b="nama_tahun";
				$query2 = $con->query("SELECT  YEAR(tanggal_pindah) AS tahun1, MONTH(tanggal_pindah) AS bulan1, COUNT(*) AS jumlah_bulanan1 FROM pindah_datang WHERE YEAR(tanggal_pindah)='$data[$b]' GROUP BY MONTH(tanggal_pindah)");
				$i=1;
				while ($data=$query2->fetch_array()){
				?>		
					"<?php 
				
					$nama_bln1=$data['bulan1'];
					if ($nama_bln1==1){
						echo "Januari";
					}else if ($nama_bln1==2){
						echo "Febuari";
					}else if ($nama_bln1==3){
						echo "Maret";
					}else if ($nama_bln1==4){
						echo "April";
					}else if ($nama_bln1==5){
						echo "Mei";
					}else if ($nama_bln1==6){
						echo "Juni";
					}else if ($nama_bln1==7){
						echo "Juli";
					}else if ($nama_bln1==8){
						echo "Agustus";
					}else if ($nama_bln1==9){
						echo "September";
					}else if ($nama_bln1==10){
						echo "Oktober";
					}else if ($nama_bln1==11){
						echo "November";
					}else if ($nama_bln1==12){
						echo "Desember";
					}
					
					?>",	
				<?php	
					$i++;
				}
				
				
				?>
		  
		  ],
          datasets: [{
            data: [
			<?php 

				$query3 = $con->query("SELECT  MONTH(tanggal_pindah) AS bulan1, COUNT(*) AS jumlah_bulanan1 FROM pindah_datang GROUP BY MONTH(tanggal_pindah)");
				$i=1;
				while ($data=$query3->fetch_array()){
				?>		
					"<?php echo $data['jumlah_bulanan1'];?>",	
				<?php	
					$i++;
				}
				
				
				?>
			
			],
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
	
		<script>
      var ctx = document.getElementById("myChart2");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
		  <?php 
			$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
				$data=$query->fetch_array();
				$a="status";
				$b="nama_tahun";
				$query4 = $con->query("SELECT YEAR(tanggal_reg) AS tahun2, MONTH(tanggal_reg) AS bulan2, COUNT(*) AS jumlah_bulanan2 FROM ref_reg_kkktp WHERE YEAR (tanggal_reg)='$data[$b]' GROUP BY MONTH(tanggal_reg)");
				$i=1;
				while ($data=$query4->fetch_array()){
				?>		
					"<?php 
					
					$nama_bln2=$data['bulan2'];
					if ($nama_bln2==1){
						echo "Januari";
					}else if ($nama_bln2==2){
						echo "Febuari";
					}else if ($nama_bln2==3){
						echo "Maret";
					}else if ($nama_bln2==4){
						echo "April";
					}else if ($nama_bln2==5){
						echo "Mei";
					}else if ($nama_bln2==6){
						echo "Juni";
					}else if ($nama_bln2==7){
						echo "Juli";
					}else if ($nama_bln2==8){
						echo "Agustus";
					}else if ($nama_bln2==9){
						echo "September";
					}else if ($nama_bln2==10){
						echo "Oktober";
					}else if ($nama_bln2==11){
						echo "November";
					}else if ($nama_bln1==12){
						echo "Desember";
					}
					
					?>",	
				<?php	
					$i++;
				}
				
				
				?>
		  
		  ],
          datasets: [{
            data: [
			<?php 

				$query5 = $con->query("SELECT MONTH(tanggal_reg) AS bulan2, COUNT(*) AS jumlah_bulanan2 FROM ref_reg_kkktp GROUP BY MONTH(tanggal_reg)");
				$i=1;
				while ($data=$query5->fetch_array()){
				?>		
					"<?php echo $data['jumlah_bulanan2'];?>",	
				<?php	
					$i++;
				}
				
				
				?>
			],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#006656',
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
	<script>
	
		var ctx = document.getElementById("myChart3").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
				<?php 
$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
				$data=$query->fetch_array();
				$a="status";
				$b="nama_tahun";
				$query6 = $con->query("SELECT YEAR(tanggal_reg) AS tahun2, status_layanan AS dataperbandingan,count(*)AS perbandingan FROM ref_reg_kkktp WHERE YEAR(tanggal_reg)='$data[$b]' GROUP BY status_layanan");
				$i=1;
				while ($data=$query6->fetch_array()){
				?>		
					"<?php echo $data['dataperbandingan'];?>",	
				<?php	
					$i++;
				}
				
				
				?>	
				],
				datasets: [{
					label: '',
					data: [
		
<?php 

				$query7 = $con->query("SELECT status_layanan AS dataperbandingan,count(*)AS perbandingan FROM ref_reg_kkktp GROUP BY status_layanan");
				$i=1;
				while ($data=$query7->fetch_array()){
				?>		
					"<?php echo $data['perbandingan'];?>",	
				<?php	
					$i++;
				}
				
				
				?>	
		
				
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(150, 172, 19, 0.2)',
					'rgba(300, 350, 70, 0.2)',
					'rgba(350, 50, 70, 0.2)',
					'rgba(180, 60, 200, 0.2)',
					'rgba(90, 60, 250, 0.2)',
					'rgba(60, 80, 600, 0.2)',
					'rgba(160, 220, 100, 0.2)',
					'rgba(10, 220, 150, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(150, 172, 19, 1)',
					'rgba(300, 20, 50, 1)',
					'rgba(350, 50, 70, 1)',
					'rgba(180, 60, 200, 1)',
					'rgba(90, 60, 250, 1)',
					'rgba(60, 80, 600, 1)',
					'rgba(160, 220, 100, 1)',
					'rgba(10, 220, 150, 1)',
					
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<script>
	
		var ctx = document.getElementById("myChart4").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
				<?php 
$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun where status='1'");
				$data=$query->fetch_array();
				$a="status";
				$b="nama_tahun";
				$query8 = $con->query("SELECT YEAR(tanggal_reg) AS tahun2, ket AS layanan, count(*) AS datalayanan FROM ref_reg_kkktp WHERE YEAR(tanggal_reg)='$data[$b]' GROUP BY ket");
				$i=1;
				while ($data=$query8->fetch_array()){
				?>		
					"<?php echo $data['layanan'];?>",	
				<?php	
					$i++;
				}
				
				
				?>	
				],
				datasets: [{
					label: '',
					data: [
		
<?php 

				$query9 = $con->query("SELECT ket AS layanan, count(*) AS datalayanan FROM ref_reg_kkktp GROUP BY ket");
				$i=1;
				while ($data=$query9->fetch_array()){
				?>		
					"<?php echo $data['datalayanan'];?>",	
				<?php	
					$i++;
				}
				
				
				?>
		
				
					],
					backgroundColor: [
					
					'rgba(75, 192, 192, 0.2)',
					'rgba(150, 172, 19, 0.2)',
					'rgba(300, 350, 70, 0.2)',
					'rgba(350, 50, 70, 0.2)',
					'rgba(180, 60, 200, 0.2)',
					'rgba(90, 60, 250, 0.2)',
					'rgba(60, 80, 600, 0.2)',
					'rgba(160, 220, 100, 0.2)',
					'rgba(10, 220, 150, 0.2)',
					],
					borderColor: [
				
					'rgba(75, 192, 192, 1)',
					'rgba(150, 172, 19, 1)',
					'rgba(300, 20, 50, 1)',
					'rgba(350, 50, 70, 1)',
					'rgba(180, 60, 200, 1)',
					'rgba(90, 60, 250, 1)',
					'rgba(60, 80, 600, 1)',
					'rgba(160, 220, 100, 1)',
					'rgba(10, 220, 150, 1)',
					
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
  </body>
</html>

<?php 
}
?>