<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">RESULTS LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<button style="float:right; background-color: #05386B; color: white"  class="btn btn-sm rounded-0 mb-4" name="add"><a href="<?php echo base_url('admin/Results/add_result') ?>">Add Result</a></button>
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Actions&nbsp;&nbsp;</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Project Name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Post Name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Result</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Book Colour</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Image</th>
			</tr>
		</thead>
		<?php foreach ($result as $res) {
		
		?>
		<tr>
			<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;</th>
			<td class="text-center"><?php echo $res->name ?></td>
			<td class="text-center"><?php echo $res->post ?></td>
			<td class="text-center"><?php echo $res->Results ?></td>
			<td class="text-center"><?php echo $res->BookColour ?></td>
			<td class="text-center"><img src="uploads/res/<?php echo $res->photo ?>	"></td>
		</tr>
	<?php }
	?>
		
		</table>
	</div>
	</div>
</div>
</div>
</form>

<!-- <?php
if(isset($_POST['add'])) {
	redirect('admin/Results/add_result');
}

?> -->

<script type="text/javascript">
	$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>