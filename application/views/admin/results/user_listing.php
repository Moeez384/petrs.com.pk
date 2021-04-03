<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">PROJECTS LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
			<!-- 	<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Actions&nbsp;&nbsp;</th> -->
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Student Name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Student CNIC</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Obtained Marks</th>
			</tr>
		</thead>
		<tr>
		<?php
		$res_id = $this->input->get('id');

		$user_results = $this->ProjectsModel->fetch_user_results($res_id);
		if($user_results) {
			foreach($user_results as $res) {
				$name = $this->ProjectsModel->fetch_post_user_detail($res->user_id)['name'];
				$cnic = $this->ProjectsModel->fetch_post_user_detail($res->user_id)['cnic_no'];
		?>	
			<!-- <td class="text-center"><a href="<?php echo base_url();?>admin/Results/edit_result?id=<?php echo $pr->id?>" title="update"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>&nbsp;<a href="<?php echo base_url();?>admin/Results/add_user_result?id=<?php echo $pr->name?>" title="add users"><i class="fas fa-arrow-right" style="font-size: 18px"></i></a>
			</td>
 -->
			<td class="text-center"><?php echo $name;?></td>
			<td class="text-center"><?php echo $cnic;?></td>
			<td class="text-center"><?php echo $res->marks_obtained;?></td>
		</tr>
		<?php }} ?>
		</table>
	</div>
	</div>
</div>
</div>
</form>

<script type="text/javascript">
	$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>