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
  <h2>Add Job Post</h2>

  <form class="" action="<?php echo base_url('admin/userProjects/addpost') ?>" method="POST">
    <div class="row">
    
     <div class="form-group col-md-6">
      <label>Job Post</label>
      <input type="text" class="form-control"  placeholder="Enter Job Post" name="post" required>
    </div>
  </div>

     <?php
if ($this->session->flashdata('success123')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('success123');
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