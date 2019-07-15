<?php 

		$query = $con->query("SELECT id_reg_pd, count(*)AS total FROM pindah_datang");

		$data=$query->fetch_array();
		echo $data['total'];
		?>,
		<?php 

		$query = $con->query("SELECT id_reg_kkktp, count(*)AS total FROM ref_reg_kkktp");

		$data=$query->fetch_array();
		echo $data['total'];
		?>