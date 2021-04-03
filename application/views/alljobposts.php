<?php
if(!empty($_SESSION['id'])) {
?>
  <div class="clear"></div>
  <div class="">
    <div class="sheading">
      <div class="sheadings">
        <h5>All jOB Post</h5>
      </div>
    </div>
      <div class="clear"> </div>
      <e style="font-size: 13px;">
<table id="tb" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead> 
 
  <?php
if ($this->session->flashdata('notsuccess123')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('notsuccess123');
    ?>
    </div>
    <?php
}
?>    	
        <tr>
      <th class="code colr text-center">ID</th>
      <th class="coursename colr text-center">Job Post</th>
      <th class="coursename colr text-center">Delete</th>
        </tr>
    </thead>
    <tr>
      <?php
      $i=1;
      ?>
      <?php foreach ($results as $res) {
         ?>
      <td class="code colr text-center"><?php echo $i?></td>
      <td class="code colr text-center"><?php echo $res->post; ?></td>
      
      <td class="code colr text-center"><a href="<?php echo base_url('Admin/userProjects/deletepost') ?>/<?php echo $res->id; ?>">Delete</td>
         
      </tr>
<?php  $i++; } ?>
    </table>
</div>
<?php } else {
  redirect(base_url().'admin/Signin');
}
?>