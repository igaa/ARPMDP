


<div class="container">

	<br>
	<h3> Data Pelayanan Umum</h3>
	<br>

	<!-- Button trigger modal -->
	
	


	 <br>
	<div class="row">
			<div class="col-md">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th width="5%" >#</th>
							<th>Nomor</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Tanggal</th>
							<th width="25%">Alamat</th>
					
						</tr>
					</thead>
					<tbody>
<?php 
	$query = $con->query("SELECT * FROM refpelayananumum ");
	$i=1;
	while ($data=$query->fetch_array()){
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data['no_reg'];?></td>
							<td><a href="?p=detpelumum&id=<?php echo $data['id_reg']; ?>"><?php echo $data['nama'];?></a> </td>
							<td><?php echo $data['nik'];?></td>
							<td><?php echo $data['tanggal_buat'];?></td>
							<td><?php echo $data['alamat'];?></td>
							
						</tr>
<?php 
$i++;
}
?>						
					   
					</tbody>
					<tfoot>
						<tr>
							<th >#</th>
							<th>Nomor Surat</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Tanggal</th>
							<th>Alamat</th>
					
						</tr>
					</tfoot>
				</table>
			</div>
			
	</div>
	
</div>
