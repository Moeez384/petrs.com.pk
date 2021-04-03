<?php
include('includes/header.php');
?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit Roll No Slip</h4>
	   </div>
	</div>
	   

    <!-- End Breadcrumb-->
	<form action="<?php echo base_url('website_controller/editRollNo') ?>" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">CNIC</div>
                  <div class="card-body">
				    <input type="text"  required name="cnic"  value="<?php echo $singleProduct->CNIC; ?>" class="form-control form-control-rounded">
				  </div>
				</div>
			</div>

  <div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">Name</div>
                  <div class="card-body">
				    <input type="text"   name="PApplied" value="<?php echo $singleProduct->Name ?>"class="form-control form-control-rounded">
				  </div>
				</div>
			</div>
          </div>

		<!--End Row-->

		
		<div class="row">
			<div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">Father Name</div>
                  <div class="card-body">
				     <input type="text"  name="center" value="<?php echo $singleProduct->F_Name; ?>" class="form-control form-control-rounded">
				  </div>
				</div>
			</div>
			<div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">Roll No</div>
                  <div class="card-body">
				     <input type="text"  name="TDate" value="<?php echo $singleProduct->Roll_No ?>" class="form-control form-control-rounded">
				  </div>
				</div>
			</div>
          </div>
				<!--End Row-->
		  <div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">Image</div>
                  <div class="card-body">
				    <input type="file" required  name="photo" class="form-control form-control-rounded">
				  </div>
				</div>
		  </div>
		</div>
        
		<div class="row">
      <div class="col-lg-6">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
<br>
</div>
</div>

<?php
include('includes/footer.php');
?>



