<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
	<title>View User Experience</title>

</head>
<body style="background-color: ghostwhite">
	<div class="wrapper">
	<br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">USER EXPERIENCE</h3>
  </div>
</div>
<e style="font-size: 14px; color: #000">

<form method="POST" id="formm">
  <div class="card border border-0 rounded-0 pt-2 pb-5 mr-5 ml-5 mb-3 mt-3">
    <?php if($this->session->flashdata('warning')) { ?>
        <div class="alert alert-danger"><strong>Error!&nbsp;</strong><?= $this->session->flashdata('warning') ?> </div>
        <?php } if($this->session->flashdata('success')) { ?>
          <div class="alert alert-success" style="background-color: green"><strong>Success!&nbsp;</strong><?= $this->session->flashdata('success') ?></div>

        <?php } ?>
  <div class="card border border-0 rounded-0 shadow ml-5 mr-5">
    <div class="container">
      <div class="row">
        <div class="col col-3">
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="basic">Basic Information</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="edu">Education</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="exp">Experience</button>
          <button class="btn btn-block text-dark rounded-0 border-dark" name="post" style="background-color: #F8F8F8">Applied Post</button>
        </div>
        <div class="col col-9">
        <div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
  <div class="card-body table-responsive">
    <table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead>
      <tr style="background-color: whitesmoke">
        <th>Action</th>
        <th class="text-center">Post Name</th>
        <th class="text-center">Project</th>
        <th class="text-center">Bank Name</th>
        <th class="text-center">Challan Date</th>
        <th class="text-center">Date Applied</th>
        <th class="text-center">Challan Submitted</th>
        <th class="text-center">Challan File</th>
      </tr>
    </thead>
    <?php 
    $id = $this->input->get('id');
    $post_details = $this->ProjectsModel->user_post($id);
    foreach($post_details as $ps) {
      $post_name = $this->ProjectsModel->get_post($ps->post_name);
      $project_name = $this->ProjectsModel->get_project($ps->project);
      $submit = $ps->challan_submitted;
      if($submit == 0) {
        $submit_val = "no";
      } else if($submit == 1) {
        $submit_val = "yes";
      }
    ?>
    <tr>
      <?php if($ps->user_approved == 0) { ?>
      <td class="text-center"><a href="<?php echo base_url()?>admin/Users/approve?id=<?php echo $id;?>&post_id=<?php echo $ps->id;?>"><?php echo 'Approve';?></a></td>
      <?php } else { ?>
        <td class="text-center"><a href="<?php echo base_url()?>admin/Users/unapprove?id=<?php echo $id;?>&post_id=<?php echo $ps->id;?>"><?php echo 'Unapprove';?></a></td>
      <?php } ?>
      <td class="text-center"><?php echo $post_name; ?></td>
      <td class="text-center"><?php echo $project_name; ?></td>
      <td class="text-center"><?php echo $ps->bank_name; ?></td>
      <td class="text-center"><?php echo $ps->challan_date; ?></td>
      <td class="text-center"><?php echo $ps->date_applied; ?></td>
      <td class="text-center"><?php echo $submit_val; ?></td>
      <td class="text-center"><a href="<?php echo base_url()?>uploads/challan/<?php echo $ps->challan_file; ?>"><?php echo 'File'; ?></a></td>
    </tr>
    <?php } ?>
  </table>
  </div>
  </div>
</div>
      </div>  
</form>
</div>
</div>
</div>
</body>
</html>

<?php 
if(isset($_POST['basic'])) {
   header( 'location: view_user?id='.$this->input->get('id'));
}

if(isset($_POST['edu'])) {
   header( 'location: view_user_education?id='.$this->input->get('id'));
}

if(isset($_POST['exp'])) {
   header( 'location: view_user_experience?id='.$this->input->get('id'));
}

if(isset($_POST['post'])) {
   header( 'location: view_applied_post?id='.$this->input->get('id'));
}
?>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>