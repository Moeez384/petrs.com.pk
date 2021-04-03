<?php
if(!empty($_SESSION['id'])) {
?>
  
  <div class="clear"></div>
  <div class="">
    <div class="sheading">
      <div class="sheadings">
        <h5>All User</h5>
      </div>
    </div>
      <div class="clear"> </div>
      <e style="font-size: 13px;">
<table id="tb" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead> 
        <?php
if ($this->session->flashdata('delete')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-success">
    <?php
    echo $this->session->flashdata('delete');
    ?>
    </div>
    <?php
}
?>
  <?php
if ($this->session->flashdata('delete12')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('delete12');
    ?>
    </div>
    <?php
}
?>    	
        <tr>
          <th class="code colr text-center">Id</th>
      <th class="code colr text-center">Name</th>
      <th class="coursename colr text-center">Email</th>
      <th class="coursename colr text-center">Delete</th>
        </tr>
    </thead>
    <tr>
      <?php foreach ($result as $res) {
         ?>
      <td class="code colr text-center"><?php echo $res->id; ?></td>
      <td class="code colr text-center"><?php echo $res->name; ?></td>
      <td class="code colr text-center"><?php echo $res->email; ?></td>
      <td><a href="<?php echo base_url('Admin/UserAdmin/deleteUser') ?>/<?php echo $res->id; ?>">Delete</td>
      </tr>
<?php } ?>
    </table>
</div>
<?php } else {
  redirect(base_url().'admin/Signin');
}
?>