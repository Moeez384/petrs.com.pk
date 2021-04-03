<?php
if(!empty($_SESSION['id'])) {
?>


<br><br>
<form method="POST">
<div class="card ml-3 mr-4 bg-white border border-0 rounded-0 shadow" style="background-color: #05386B;">
	<div class="card-body table-responsive">
		<h3 style="color: #05386B;" class="text-center">USERS LIST</h3>
	</div>
</div>
<br>
<div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
	<div class="card-body table-responsive">
		<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
			<thead>
			<tr style="background-color: whitesmoke">
				<th style="width: 140px;" class="text-center"><i class="fas fa-tasks"></i>&nbsp;Actions&nbsp;&nbsp;</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Father's name</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Email</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Phone</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Gender</th>
				<th class="text-center"><i class="fas fa-building"></i>&nbsp;Religion</th>
			</tr>
		</thead>
		<?php
		$all_users = $this->ProjectsModel->fetch_all_users();
		if($all_users) {
			foreach($all_users as $us) {
		?>
		<tr>	
			<td class="text-center"><a href="<?php echo base_url();?>admin/Users/view_user?id=<?php echo $us->id?>" title="view"><i class="fas fa-edit text-primary" style="font-size: 18px"></i></a>
			</td>
			<td class="text-center"><?php echo $us->name;?></td>
			<td class="text-center"><?php echo $us->father_name;?></td>
			<td class="text-center"><?php echo $us->email;?></td>
			<td class="text-center"><?php echo $us->ph_number;?></td>
			<td class="text-center"><?php echo $us->gender;?></td>
			<td class="text-center"><?php echo $us->religion;?></td>
		</tr>
	<?php }} ?>
		</table>
	</div>
	</div>
</div>
</div>
</form>

<!-- <script type="text/javascript">
	$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>
 -->

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script type="text/javascript">
	 $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
</script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>