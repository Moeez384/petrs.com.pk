<?php
if(!empty($_SESSION['id'])) {
?>
  
<style type="text/css">
  .btn{
    background: #05386b;
    color: #fff;
  }
</style>
<body>

<div class="container">
  <h2>Add a New User</h2>

<?php
if ($this->session->flashdata('error12')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('error12');
    ?>
    </div>
    <?php
}
?>  

  <form class="" action="<?php echo base_url('admin/UserAdmin/insert') ?>" method="post">
    <div class="row">
      <div class="form-group col-md-6">
      <label>User Id</label>
      <input type="Number" class="form-control" id="email" placeholder="Enter Unique Id" name="id" required>
    </div>
    <div class="form-group col-md-6">
      <label>User Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter User Name" name="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email" required>
    </div>
     <div class="form-group col-md-6">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="email" placeholder="Enter Password" name="pwd" required>
    </div>
    <?php
    $this->load->model('Project_model');
    $result=$this->Project_model->getprojects(); 
    ?>
    <div class="form-group col-md-6">
    <label for="sel1">Project</label>
    
      <select name="project" class="form-control" id="sel1">
              <?php 
    foreach ($result as $res) {
     ?> 
        <option><?php echo $res->project_name; ?></option>
      <?php }
      ?>
      </select>
    </div>
  </div>
    <?php
if ($this->session->flashdata('insert')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('insert');
    ?>
    </div>
    <?php
}
?>

   <?php
if ($this->session->flashdata('false')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('false');
    ?>
    </div>
    <?php
}
?>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
<?php } else {
  redirect(base_url().'admin/Signin');
}
?>