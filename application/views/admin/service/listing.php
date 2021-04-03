<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">SERVICES LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<button style="float:right; background-color: #05386B; color: white"  class="btn btn-sm rounded-0 mb-4" name="add">Add Service</button>
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
		$all_services = $this->ProjectsModel->fetch_all_services();
		if($all_services) {
			foreach($all_services as $sv) {
		?>	
			<td class="text-center"><a href="<?php echo base_url();?>admin/Services/update_service?id=<?php echo $sv->id?>" title="update"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><?php echo $sv->title;?></td>
			<td class="text-center"><?php echo (strlen($sv->details) > 13) ? substr($sv->details,0,18).'...' : $sv->details;?></td>
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
	redirect('admin/Services/add_service');
}

// if($this->input->post('delete')) {
// 	$id = $this->input->post('delete');
// 	$delete = $this->->delete_student($id);
// 	if($delete) {
// 		// echo '<script type="text/javascript">window.alert("Student Successfully Deleted")</script>';
// 		redirect(base_url().'admin/Students');
// 	} else {
// 		echo '<script type="text/javascript">window.alert("Student Could Not Be Deleted. Try Again")</script>';
// 	}
// }
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