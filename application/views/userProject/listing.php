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
  <h2>Add a New Project</h2>

  <form class="" action="<?php echo base_url('admin/userProjects/insertProject') ?>" method="POST">
    <div class="row">
    
     <div class="form-group col-md-6">
      <label>Project Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Project Name" name="project_name" required>
    </div>
  </div>

     <?php
if ($this->session->flashdata('insert1')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('insert1');
    ?>
    </div>
    <?php
}
?>

   <?php
if ($this->session->flashdata('false1')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('false1');
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