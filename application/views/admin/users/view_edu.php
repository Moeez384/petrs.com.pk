<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
	<title>View User Education</title>

</head>
<body style="background-color: ghostwhite">
	<div class="wrapper">
	<br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">USER EDUCATION</h3>
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
        <th class="text-center">Degree</th>
        <th class="text-center">Institute</th>
        <th class="text-center">Degree type</th>
        <th class="text-center">Board</th>
        <th class="text-center">Passing Date</th>
        <th class="text-center">Total Marks</th>
        <th class="text-center">Obtained Marks</th>
        <th class="text-center">Exam System</th>
        <th class="text-center">Division</th>
        <th class="text-center">CGPA</th>
        <th class="text-center">Optional Subjects</th>
      </tr>
    </thead>
    <?php 
    $id = $this->input->get('id');
    $education = $this->ProjectsModel->user_edu($id);
    foreach($education as $edu) {
    ?>
    <tr>
      <td class="text-center"><?php echo $edu->degree_name;?></td>
      <td class="text-center"><?php echo $edu->institute;?></td>
      <td class="text-center"><?php echo $edu->degree_type;?></td>
      <td class="text-center"><?php echo $edu->board_name;?></td>
      <td class="text-center"><?php echo $edu->passing_date;?></td>
      <td class="text-center"><?php echo $edu->total_marks;?></td>
      <td class="text-center"><?php echo $edu->obtained_marks;?></td>
      <td class="text-center"><?php echo $edu->exam_system;?></td>
      <td class="text-center"><?php echo $edu->division;?></td>
      <td class="text-center"><?php echo $edu->cgpa;?></td>
      <td class="text-center"><?php echo $edu->optional_subjects;?></td>
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