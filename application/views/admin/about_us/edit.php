<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit About Us</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">EDIT ABOUT US</h3>
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
        <form method="post" action="<?php echo base_url()?>admin/AboutUs/update" enctype="multipart/form-data">
          <?php
          $fetch_msg = $this->ProjectsModel->fetch_about_msg();
          foreach($fetch_msg as $msg) {
          ?>
          <input class="form-control mt-1 rounded-3" id="txt-id" type="text" name="id" value="<?php echo $msg->id; ?>" style="width: 100%" hidden>
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Message:
            <textarea class="form-control mt-1 rounded-3" id="txt-detail" name="detail" style="width: 100%"><?php echo $msg->message ?></textarea></p>
            <span class="spn-err" id="err-detail" style="color: red; display: none;">Please provide message</span>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-sm">
            <button style="float:right" class="btn btn-primary rounded-3 pl-3 pr-3" name="save" onclick="return add_ceo_msg()"><i class="fa fa-check-square" aria-hidden="true"></i> Save</button>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>


<script src="<?php echo base_url()?>assets/scripts/admin/ceo_message/add.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>


<?php } else {
  redirect(base_url().'admin/Signin');
}
?>