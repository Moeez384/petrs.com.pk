<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">POSTS LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<button style="float:right; background-color: #05386B; color: white"  class="btn btn-sm rounded-0 mb-4" name="add">Add Post</button>
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Actions&nbsp;&nbsp;</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Title</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Project</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Test Center</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Test Date</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Test Time</th>
			</tr>
		</thead>
		<tr>
			<!-- <?php
			$all_posts = $this->ProjectsModel->fetch_all_posts();
			if($all_posts) {
				foreach($all_posts as $dv) {
					$pr_name = $this->ProjectsModel->pr_name($dv->project_id);
			?>	 -->
			<td class="text-center"><a href="<?php echo base_url();?>admin/Posts/update_post?id=<?php echo $dv->id?>" title="update"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><?php echo $dv->name;?></td>
			<td class="text-center"><?php echo $pr_name;?></td>
			<td class="text-center"><?php echo $dv->center != '' ? $dv->center : '';?></td>
			<td class="text-center"><?php echo $dv->test_date != '' ? $dv->test_date : '';?></td>
			<td class="text-center"><?php echo $dv->test_time != '' ? $dv->test_time : '';?></td>
		</tr>
		<!-- <?php } } ?> -->
		</table>
	</div>
	</div>
</div>
</div>
</form>

<?php
if(isset($_POST['add'])) {
	redirect('admin/Posts/add_post');
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