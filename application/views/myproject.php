
<?php
if(!empty($_SESSION['id'])) {
	$idd=$ids;
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div class="clear"></div>
  <div class="">
	<div class="sheading">
	  <div class="sheadings">
		<h5>Prject Details</h5>
	  </div>
	</div>
	  <div class="clear"> </div>
	  <div style="font-size: 13px; overflow: scroll; height: auto;">
<table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
	  <thead> 
		<?php
if ($this->session->flashdata('false12587')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
	<?php
	echo $this->session->flashdata('false12587');
	?>
	</div>
	<?php
}
?>
	 	
	<tr>
	  <th class="code colr text-center">Form No</th>
	  <th class="coursename colr text-center">Post</th>
	  <th class="coursename colr text-center">Name</th>
	  <th class="coursename colr text-center">CNIC</th>
	  <th class="coursename colr text-center">Gender</th>
	  <th class="coursename colr text-center">Date</th>
	  <th class="coursename colr text-center">Religion</th>
	  <th class="coursename colr text-center">Disability</th>
	  <th class="coursename colr text-center">Address</th>
	  <th class="coursename colr text-center">Phone</th>
	  <th class="coursename colr text-center">District</th>
	  <th class="coursename colr text-center">Region</th>
	  <th class="coursename colr text-center">City</th>
	  <th class="coursename colr text-center">Goverment Employe</th>
	  <th class="coursename colr text-center">Degree level</th>
	  <th class="coursename colr text-center">Division</th>
	  <th class="coursename colr text-center">Marks Obtained</th>
	  <th class="coursename colr text-center">Total</th>
	  <th class="coursename colr text-center">Board</th>
	  <th class="coursename colr text-center">Image</th>
	  <th class="coursename colr text-center">Project Name</th>
	  <th class="coursename colr text-center">Delete</th>

	  <!-- <th class="location colr text-center">Answer Keys</th> -->
	</tr>
	</thead>
	<tr>
	  <?php foreach ($result as $res) {
		 ?>
	  <td class="code colr text-center"><?php echo $res->form; ?></td>
	  <td class="code colr text-center"><?php echo $res->post; ?></td>
	  <td class="code colr text-center"><?php echo $res->name; ?></td>
	  <td class="code colr text-center"><?php echo $res->cnic; ?></td>
	  <td class="code colr text-center"><?php echo $res->gender; ?></td>
	  <td class="code colr text-center"><?php echo $res->date; ?></td>
	  <td class="code colr text-center"><?php echo $res->religion; ?></td>
	  <td class="code colr text-center"><?php echo $res->disability; ?></td>
	  <td class="code colr text-center"><?php echo $res->address; ?></td>
	  <td class="code colr text-center"><?php echo $res->phone; ?></td>
	  <td class="code colr text-center"><?php echo $res->district; ?></td>
	  <td class="code colr text-center"><?php echo $res->region; ?></td>
	  <td class="code colr text-center"><?php echo $res->city; ?></td>
	  <td class="code colr text-center"><?php echo $res->goverment; ?></td>
	  <td class="code colr text-center"><?php echo $res->certificate; ?></td>
	  <td class="code colr text-center"><?php echo $res->division; ?></td>
	  <td class="code colr text-center"><?php echo $res->marksObtained; ?></td>
	  <td class="code colr text-center"><?php echo $res->total; ?></td>
	  <td class="code colr text-center"><?php echo $res->board; ?></td>
	  <td class="code colr text-center"><?php echo $res->photo; ?></td>
	  <td class="code colr text-center"><?php echo $res->project_name; ?></td>
	  <td><button class="btn btn-danger" data-catid=<?php echo $res->id; ?> data-toggle="modal" data-target="#delete">Delete</button></td>
	  </tr>
<?php } ?>
	</table>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 style="position:relative; left:125px;" class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="category_id" id="cat_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning"><a href="<?php echo base_url('Admin/userProjects/deletetest') ?>/<?php echo $res->id; ?>/<?php echo $idd; ?>">Yes, Delete</a></button>
	      </div>
     
    </div>
  </div>
</div>

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