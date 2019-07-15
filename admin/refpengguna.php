<div class="container">

	<br>
	<h3>Daftar Pengguna</h3>
	<br>

	<!-- Button trigger modal -->
	<div class="row">
		<div class="col-md" align="left">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  <span data-feather="plus"></span> Tambah User
	</button>
		</div>
	</div>
	

	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Form Register Pengguna</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<?php include "adduser.php";?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	 <br>
	<div class="row">
			<div class="col-md">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th width="5%" >#</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Level</th>
							<th width="16%">Action</th>
						</tr>
					</thead>
					<tbody>
<?php 
	$query = $con->query("SELECT * FROM user");
	$i=1;
	while ($data=$query->fetch_array()){
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data['nama_user'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['level'];?></td>
							<td align="center"><a href="?p=edituser&id=<?php echo $data['id_user']; ?>" class="btn btn-warning btn-sm "><span data-feather="edit"></span>edit</a>  
							<a onclick="return confirm ('Yakin Mau Menghapus');" href="?p=deluser&id=<?php echo $data['id_user'];?>" class="btn btn-danger btn-sm "><span data-feather="trash"></span>hapus</a></td>
						</tr>
<?php 
$i++;
}
?>						
					   
					</tbody>
					<tfoot>
						<tr>
							<th width="5%" >#</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Level</th>
							<th width="16%">Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			
	</div>
	
</div>