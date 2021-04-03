<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">EDIT PROJECT</h3>
  </div>
</div>
<e style="font-size: 14px; color: #000">

  <div class="card border border-0 rounded-0 pt-5 pb-5 mr-5 ml-5 mb-3 mt-3">
  <div class="card border border-0 rounded-0 shadow ml-5 mr-5">
    <div class="container">
      <div class="row">
      <div class="col">
      <div class="card-body">
        <?php if($this->session->flashdata('warning')) { ?>
        <div class="alert alert-danger"><strong>Error!&nbsp;</strong><?= $this->session->flashdata('warning') ?> </div>
        <?php } if($this->session->flashdata('success')) { ?>
          <div class="alert alert-success" style="background-color: green"><strong>Success!&nbsp;</strong><?= $this->session->flashdata('success') ?></div>
        <?php } ?>
        <form method="post" action="<?php echo base_url()?>admin/Projects/update" enctype="multipart/form-data">
          <input class="form-control mt-1 rounded-3" id="txt-id" type="text" name="id" value="<?php echo $id; ?>" style="width: 100%" hidden>
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Project Name:
            <input class="form-control mt-1 rounded-3" id="txt-name" type="text" value="<?php echo $name != '' ? $name : ''; ?>" name="name" style="width: 100%"></p>
            <span class="spn-err" id="err-name" style="color: red; display: none;">Please provide name</span>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Last Date:
            <input class="form-control mt-1 rounded-3" id="txt-date" value="<?php echo $last_date != '' ? $last_date : ''; ?>" type="date" name="date" style="width: 100%"></p>
            <span class="spn-err" id="err-date" style="color: red; display: none;">Please provide last date</span>
          </div>
        </div>
        <!-- next row -->
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Status:
            <select class="form-control mt-1 rounded-3" id="txt-status" name="status" style="width: 100%">
              <option value="<?php echo $status != '' ? $status : ''; ?>"><?php echo $status_val; ?></option>
              <?php if($status == 0) { ?>
             <!--  <option value="0">Not started</option> -->
              <option value="1">Ongoing</option>
              <option value="2">Completed</option>
            <?php } else if($status == 1) { ?>
              <option value="0">Not started</option>
             <!--  <option value="1">Ongoing</option> -->
              <option value="2">Completed</option>
            <?php } else if($status == 2) {?> 
              <option value="0">Not started</option>
              <option value="1">Ongoing</option>
              <!-- <option value="2">Completed</option> -->
            <?php } else { ?>
              <option value="0">Not started</option>
              <option value="1">Ongoing</option>
              <option value="2">Completed</option>
            <?php } ?>
            </select>
            </p>
            <span class="spn-err" id="err-status" style="color: red; display: none;">Please provide status</span>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Advertisement:
              <select class="form-control mt-1 rounded-3" id="txt-ad" name="adv" style="width: 100%">
                <?php 
                $fetch_ad = $this->ProjectsModel->fetch_ad_title($advertisement);
                ?>
                <option value="<?php echo $advertisement; ?>"><?php echo $fetch_ad; ?></option>
               <?php 
               $fetch_ads = $this->ProjectsModel->fetch_all_ads();
               if($fetch_ads) {
                foreach($fetch_ads as $ads) {
                  if($ads->title != $advertisement) {
               ?>
                <option value="<?php echo $ads->title; ?>"><?php echo $ads->title; ?></option>
               <?php }}} else { ?>
                <option></option>
               <?php } ?>
             </select>
            <!-- <input class="ml-1 mt-1 form-control rounded-3" type="text" id="txt-ad" name="adv" value="<?php echo $advertisement; ?>" style="width: 100%"> -->
            </p>
            <span class="spn-err" id="err-ad" style="color: red; display: none;">Please provide advertisement</span>
          </div>
        </div>
        <div class="row">
           <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Attachment:
            <input class="ml-1 mt-1" type="file" id="txt-file" name="file" value="<?php echo $attachment; ?>" style="width: 100%">
            </p>
            <span class="spn-err" id="err-file" style="color: red; display: none;">Please provide attachment</span>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Center Name:
            <input class="form-control mt-1 rounded-3" type="text" id="txt-center" name="center" value="<?php echo $center; ?>" style="width: 100%">
            </p>
            <span class="spn-err" id="err-center" style="color: red; display: none;">Please provide center name</span>
          </div>
        </div>
        <div class="row">
          <input type="text" name="img" value="<?php echo $attachment; ?>" hidden>
           <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">View File:
              <a href="<?php echo base_url()?>uploads/projects/<?php echo $attachment;?>"><?php echo $attachment ?></a>
            </p>
        <!--     <span class="spn-err" id="err-file" style="color: red; display: none;">Please provide attachment</span> -->
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-sm">
            <button style="float:right" class="btn btn-primary rounded-3 pl-3 pr-3" name="save" onclick="return add_project()"><i class="fa fa-check-square" aria-hidden="true"></i> Update</button>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>


<script src="<?php echo base_url()?>assets/scripts/admin/projects/update.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>