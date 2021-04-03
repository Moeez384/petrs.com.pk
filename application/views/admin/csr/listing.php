<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">CSR LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<button style="float:right; background-color: #05386B; color: white"  class="btn btn-sm rounded-0 mb-4" name="add">Add CSR</button>
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Actions&nbsp;&nbsp;</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Title</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Details</th>
			</tr>
		</thead>
		<tr>
		<?php
		$all_csr = $this->ProjectsModel->fetch_all_csr();
		if($all_csr) {
			foreach($all_csr as $sr) {
		?>	
			<td class="text-center"><a href="<?php echo base_url();?>admin/CSR/update_csr?id=<?php echo $sr->id?>" title="update"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><?php echo $sr->title;?></td>
			<td class="text-center"><?php echo (strlen($sr->details) > 13) ? substr($sr->details,0,18).'...' : $sr->details;?></td>
		</tr>
		<?php }} ?>
		</table>
	</div>
	</div>
</div>
</div>
</form>

<?php
if(isset($_POST['add'])) {
	redirect('admin/CSR/add_csr');
}
?>

<script type="text/javascript">
	$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>