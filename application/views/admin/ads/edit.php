<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Advertisement</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">ADD ADVERTISEMENT</h3>
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
        <form method="post" action="<?php echo base_url()?>admin/Advertisement/update" enctype="multipart/form-data">
          <input class="form-control mt-1 rounded-3" id="txt-id" type="text" name="id" value="<?php echo $id; ?>" style="width: 100%" hidden>
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Advertisement:
            <input class="form-control mt-1 rounded-3" id="txt-title" type="text" name="title" value="<?php echo $title; ?>" style="width: 100%"></p>
            <span class="spn-err" id="err-title" style="color: red; display: none;">Please provide ad title</span>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-sm">
            <button style="float:right" class="btn btn-primary rounded-3 pl-3 pr-3" name="save" onclick="return add_ad()"><i class="fa fa-check-square" aria-hidden="true"></i> Save</button>
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


<script src="<?php echo base_url()?>assets/scripts/admin/ads/add.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>
<?php } else {
  redirect(base_url().'admin/Signin');
}
?>