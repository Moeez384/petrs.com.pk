<?php
if(!empty($_SESSION['id'])) {
?>
  <div class="clear"></div>
  <div class="">
    <div class="sheading">
      <div class="sheadings">
        <h5>All Projects</h5>
      </div>
    </div>
      <div class="clear"> </div>
      <e style="font-size: 13px;">
<table id="tb" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead> 
 
  <?php
if ($this->session->flashdata('false09')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('false09');
    ?>
    </div>
    <?php
}
?>    	
        <tr>
      <th class="code colr text-center">ID</th>
      <th class="coursename colr text-center">Project Name</th>
      <th class="coursename colr text-center">Delete</th>
      <th class="coursename colr text-center">View Project Details</th>
        </tr>
    </thead>
    <tr>
      <?php $i=1; ?>
      <?php foreach ($result as $res) {
         ?>
      <td class="code colr text-center"><?php echo $i; ?></td>
      <td class="code colr text-center"><?php echo $res->project_name; ?></td>
      
      <td><a href="<?php echo base_url('Admin/userProjects/deleteProject') ?>/<?php echo $res->id; ?>">Delete</td>
         <td><a href="<?php echo base_url('admin/userProjects/searchProject') ?>/<?php echo $res->id; ?>">View Details</td>
      </tr>
<?php $i++; } ?>
    </table>
</div>
<?php } else {
  redirect(base_url().'admin/Signin');
}
?>