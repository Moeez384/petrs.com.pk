<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Result</title>

</head>
<body style="background-color: ghostwhite">
    <form action="<?php echo base_url('admin/Results/submitResult') ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Project Name</label>
    <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Post</label>
    <input type="text" name="post" required class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Result</label>
    <input type="text" name="res" required class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Book Colour</label>
    <input type="text" name="book" required class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name="photo" required class="form-control" id="exampleInputPassword1" placeholder="  ">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


<script src="<?php echo base_url()?>assets/scripts/admin/results/add.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>

<script type="text/javascript">

 $(document).ready(function() {

    $('.pr').change(function() {
        get_projects();
    });

      function get_projects() {
          var classs = $('.pr').val();
          $.ajax({
              url: "<?php echo base_url();?>website/Signup/getProjects",
              method: "POST",
              data: {data:classs},
              success:function(data){
                // alert(data);
                $('#txt-post').html(data);
            }
          });
        }
    });
</script>