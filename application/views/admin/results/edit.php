<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Result</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">EDIT RESULT</h3>
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
        <form method="post" action="<?php echo base_url()?>admin/Results/update" enctype="multipart/form-data">
          <input class="form-control mt-1 rounded-3" id="txt-id" type="text" name="id" value="<?php echo $id; ?>" style="width: 100%" hidden>
        <div class="container ml-2"> 
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Project Name:
              <?php
              $name1 = $this->ProjectsModel->result_name($project);
              ?>
              <input class="form-control mt-1 rounded-3" type="text" name="p_project" value="<?php echo $project; ?>" style="width: 100%" hidden>
              <input class="form-control mt-1 rounded-3" type="text" value="<?php echo $name1; ?>" style="width: 100%" disabled>
            <select class="form-control mt-1 rounded-3 pr" id="txt-pr" type="text" name="project" style="width: 100%">
              <?php 
              $completed_projects = $this->ProjectsModel->fetch_completed_projects();
              if($completed_projects) {
                foreach($completed_projects as $pr) {
              ?>
                <option></option>
                <option value="<?php echo $pr->id; ?>"><?php echo $pr->name;?></option>
              <?php }} else { ?>
                <option value=""><?php echo 'No completed projects found';?></option>
              <?php } ?>
            </select>
          </p>
            <span class="spn-err" id="err-pr" style="color: red; display: none;">Please provide project name</span>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Result Name:
               <input class="form-control mt-1 rounded-3" type="text" name="p_name" value="<?php echo $name; ?>" style="width: 100%" hidden>
              <input class="form-control mt-1 rounded-3" type="text" value="<?php echo $this->ProjectsModel->get_post($name); ?>" style="width: 100%" disabled>
            <select class="form-control mt-1 rounded-3" id="txt-post" type="text" name="name" style="width: 100%">
           <!--    <option value="<?php echo $name; ?>"><?php echo $this->ProjectsModel->get_post($name); ?></option> -->
            </select>
          </p>
            <span class="spn-err" id="err-name" style="color: red; display: none;">Please provide name</span>
          </div>
          
        </div>
        <!-- next row -->
        <div class="row">
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Total Marks:
            <input class="form-control mt-1 rounded-3" type="number" id="txt-num" name="marks" value="<?php echo $total_marks; ?>" style="width: 100%">
            </p>
            <span class="spn-err" id="err-num" style="color: red; display: none;">Please provide total marks</span>
          </div>
        </div>


        <div class="row">
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Answer Key:
            <input class="ml-1 mt-1" type="file" id="txt-file" name="file" value="<?php echo $attachment; ?>" style="width: 100%">
            </p>
            <span class="spn-err" id="err-file" style="color: red; display: none;">Please provide attachment</span>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">View File:
               <input class="form-control mt-1 rounded-3" type="text" name="att" value="<?php echo $attachment; ?>" style="width: 100%" hidden>
           <a href="<?php echo base_url()?>uploads/results/<?php echo $attachment;?>"><?php echo $attachment ?></a>
            </p>
            <span class="spn-err" id="err-file" style="color: red; display: none;">Please provide attachment</span>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-sm">
            <button style="float:right" class="btn btn-primary rounded-3 pl-3 pr-3" name="save" onclick="return add_project()"><i class="fa fa-check-square" aria-hidden="true"></i> Update</button>
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