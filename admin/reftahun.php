<br>
<br>
<div class="container">
<h2>Priode Pemerintahan</h2>
 <br>
<div class="row">
		<div class="col-md" align="left">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  <span data-feather="plus"></span> Add Tahun
	</button>
		</div>
	</div>
<br>	

	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Priode </h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<?php include "addtahun.php";?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Priode Pemerintahan</th>
                  <th>Aktif/Non Aktif</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
<?php 
$query = $con->query("SELECT * ,CASE status When '1' then 'aktif' When '0' then 'Non Aktif' END AS status FROM ref_tahun ");
$i=1;
while ($data=$query->fetch_array()){
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['nama_tahun'];?></td>
        <td><?php echo $data['status'];?></td>
        <td> 
		<a onclick="return confirm ('Yakin Mau Mengganti Status');"  class = "badge badge-danger" href="?p=ubahtahun&id=<?php echo $data['id_tahun'];?>">Ubah Status</a></td>
    </tr>
<?php 
$i++;
}
?>															
              </tbody>
            </table>
	
			
          </div>
</div>
