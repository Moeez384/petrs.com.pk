<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">PROJECTS LIST</h3>	

  <?php
if ($this->session->flashdata('Deleted')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('Deleted');
    ?>
    </div>
    <?php
}
?>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<button style="float:right; background-color: #05386B; color: white"  class="btn btn-sm rounded-0 mb-4" name="add">Add Project</button>
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Edit&nbsp;&nbsp;</th>
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Delete&nbsp;&nbsp;</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Status</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Advertisement</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Center</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Last Date</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Created Date</th>
			</tr>
		</thead>
		<tr>
		<!-- <?php
		$all_projects = $this->ProjectsModel->fetch_all_projects();
		if($all_projects) {
			foreach($all_projects as $pr) {
				if($pr->status == 0) {
					$status_val = 'Not started';
				} else if($pr->status == 1) {
					$status_val = 'Ongoing';
				} else if($pr->status == 2) {
					$status_val = 'Completed';
				} else {
					$status_val = '';
				}

				$fetch_ad = $this->ProjectsModel->fetch_ad_title($pr->advertisement);
		?>	 -->
			<td class="text-center"><a href="<?php echo base_url();?>admin/Projects/edit_project?id=<?php echo $pr->id?>" title="update"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><a href="<?php echo base_url();?>admin/Projects/deleteProject?id=<?php echo $pr->id?>" title="update"><i class="fa fa-trash text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><?php echo $pr->name;?></td>
			<td class="text-center"><?php echo $status_val;?></td>
			<td class="text-center"><?php echo $fetch_ad;?></td>
			<td class="text-center"><?php echo $pr->center;?></td>
			<td class="text-center"><?php echo $pr->last_date;?></td>
			<td class="text-center"><?php echo $pr->created_date;?></td>
		</tr>
		<!-- <?php }} ?> -->
		</table>
	</div>
	</div>
</div>
</div>
</form>

<?php
if(isset($_POST['add'])) {
	redirect('admin/Projects/add_project');
}

// if($this->input->post('delete')) {
// 	$id = $this->input->post('delete');
// 	$delete = $this->Admin_model->delete_student($id);
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