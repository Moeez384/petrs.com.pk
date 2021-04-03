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
  <div class="card border border-0 rounded-0 shadow ml-5 mr-5">
    <div class="container">
      <div class="row">
        <div class="col col-3">
          <button class="btn btn-block text-dark rounded-0 border-dark" name="basic" style="background-color: #F8F8F8">Basic Information</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="edu">Education</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="exp">Experience</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="post">Applied Post</button>
        </div>
        <div class="col col-9">
        <div class="card ml-3 mr-4 border border-0 rounded-0 shadow">
<e style="font-size: 14px; color: #000">
  <div class="card-body table-responsive">
    <table id="myTable" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead>
      <tr style="background-color: whitesmoke">
        <th class="text-center">Post Name</th>
        <th class="text-center">Department</th>
        <th class="text-center">Department type</th>
        <th class="text-center">From Date</th>
        <th class="text-center">To Date</th>
        <th class="text-center">BPS</th>
        <th class="text-center">Salary</th>
        <th class="text-center">Duties</th>
      </tr>
    </thead>
    <?php 
    $id = $this->input->get('id');
    $experience = $this->ProjectsModel->user_exp($id);
    foreach($experience as $exp) {
    ?>
    <tr>
      <td class="text-center"><?php echo $exp->post_name;?></td>
      <td class="text-center"><?php echo $exp->dept_name;?></td>
      <td class="text-center"><?php echo $exp->dept_type;?></td>
      <td class="text-center"><?php echo $exp->from_date;?></td>
      <td class="text-center"><?php echo $exp->to_date;?></td>
      <td class="text-center"><?php echo $exp->bps;?></td>
      <td class="text-center"><?php echo $exp->salary;?></td>
      <td class="text-center"><?php echo $exp->duties;?></td>
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