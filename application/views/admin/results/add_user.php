<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add User Result</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">ADD USER RESULT</h3>
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
          <div class="alert alert-success" style="background-color: green"><strong>Success!&nbsp;</strong><?= $this->session->flashdata('success') ?>
</div>

        <?php } ?>
        <?php 
          $result = $this->ProjectsModel->get_post($this->input->get('id'));
        ?>
        <form method="post" action="<?php echo base_url()?>admin/Results/save_user" enctype="multipart/form-data">
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Result Name:
              <input class="form-control mt-1 rounded-3" value="<?php echo $this->input->get('id'); ?>" type="text" name="id" style="width: 100%" hidden>
            <input class="form-control mt-1 rounded-3" id="txt-name" value="<?php echo $result; ?>" type="text" name="name" style="width: 100%" disabled>
          </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Users:
            <select class="form-control mt-1 rounded-3" id="txt-user" type="text" name="user" style="width: 100%">
              <?php 
              $users = $this->ProjectsModel->fetch_post_users($this->input->get('id'));
              if($users) { ?>
                <option>Select User</option>
              <?php foreach($users as $us) {
                $name = $this->ProjectsModel->fetch_post_user_detail($us->user_id)['name'];
                $fname = $this->ProjectsModel->fetch_post_user_detail($us->user_id)['father_name'];
                $cnic = $this->ProjectsModel->fetch_post_user_detail($us->user_id)['cnic_no'];
              ?>

                <option value="<?php echo $us->user_id; ?>"><?php echo $name.' '.$fname.'-'.$cnic;?></option>
              <?php }} else { ?>
                <option value=""><?php echo 'No users found';?></option>
              <?php } ?>
            </select>
          </p>
            <span class="spn-err" id="err-user" style="color: red; display: none;">Please provide user</span>
          </div>
        </div>
        <!-- next row -->
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Marks Obtained:
            <input class="form-control mt-1 rounded-3" type="number" id="txt-num" name="marks" style="width: 100%">
            </p>
            <span class="spn-err" id="err-num" style="color: red; display: none;">Please provide marks obtained</span>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col col-sm">
            <button style="float:right" class="btn btn-primary rounded-3 pl-3 pr-3" name="save" onclick="return add_user_result()"><i class="fa fa-check-square" aria-hidden="true"></i> Save</button>
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


<script src="<?php echo base_url()?>assets/scripts/admin/user_results/add.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>