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
  <h2>Associate Project With Users</h2>
     

  <form class="" action="<?php echo base_url('admin/UserAdmin/link') ?>" method="post">
    <div class="row">
      <div class="form-group col-md-6">
        <?php $products=$this->Project_model->getUserId();  
        ?>
      <label>User Name</label>
      <select name="name" class="form-control" id="sel1">
        <?php 
    foreach ($products as $pro) {
     ?> 
        <option><?php echo $pro->name; ?></option>
      <?php }
      ?>
      </select>
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
if ($this->session->flashdata('alreadyExits')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('alreadyExits');
    ?>
    </div>
    <?php
}
?>

    <?php
if ($this->session->flashdata('insert12584')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('insert12584');
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