<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    ul.inquiryform li input {
    width: 300px;
    }
    ul.inquiryform li select {
    width: 315px;
    }
    ul.inquiryform{
        column-count: 2;
    }
    .search_course {
    width: 570px;
    }
    .box {
    width: 500px;
    }
    ul.inquiryform li{
        width:250px;
    }
    .apply_now{
        margin-top: 10px;
    }
    ul.inquiryform li input[type="checkbox"]{
        width: unset;
    }
     ul.inquiryform li.pz-select{
        font-size:10px;
    }
    .form {
    width: unset;
    }
    
    .rtable {
 
  vertical-align: top;
  max-width: 100%;
  overflow-x: auto;
  white-space: nowrap;
  border-collapse: collapse;
  border-spacing: 0;
      margin-top: 20px;
    margin-bottom: 50px;
    width:100%;
}
.pz-rtable {
 width:auto;
  display: inline-block;
  
}
.rtable,
.rtable--flip tbody {

  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 12px;
  text-align:center !important;
  text-align: left;
  text-transform: uppercase;
  background: #01411c;
    color: #fff !important;
}

.rtable th,
.rtable td {
  padding: 6px 12px;
  border: 1px solid #d9d7ce;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.rtable--flip td,
.rtable--flip th {
  display: block;
}
.pz-center {
    margin-bottom: 20px;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.form {
    float: unset;
}
.inquiryform li:last-child{
  margin-bottom: 60px;
}

</style>

<div id="content_section">
  <div class="contentblock">
    <div class="search_course pz-center">
     <div class="dashboard-icon">
            <img src="<?php echo base_url()?>assets/images/Dashboard.png" alt="" />
            <a class="pz-dashboard" href="<?php echo base_url()?>website/index/dashboard?id=<?php echo $this->input->get('id');?>">Go To Dashboard</a>
          </div>
      <div class="box">
        <div class="alert alert-danger print-error-msg" style="display:none"></div>
         <?php if ($this->session->flashdata('warning')) {?>
          <div class="alert">
            <?= $this->session->flashdata('warning') ?> 
          </div>
         <?php } ?>
      <div class="form">
        <form method="post" action="<?php echo base_url()?>website/Signup/save_post" enctype="multipart/form-data">
          <input type="text" name="id" value="<?php echo $id;?>" hidden>
          <h3>Step: 05 of 06 Post Mape .</h3>
            <ul class="inquiryform">
              <li>
                <label>Project Name</label>
                <input type="text" name="pr_name" value="<?php echo $project != '' ? $project : ''; ?>" disabled>
              </li>
              <li>
                <label>Post Name</label>
                <input type="text" name="post_name" value="<?php echo $post != '' ? $post : ''; ?>" disabled>
              </li> 
              <li>
                <label>Challan Date</label> 
                <input name="challan_date" type="date" id="txt-challandate" value="<?php echo $challan_date != '' ? $challan_date : ''; ?>">
                <span class="spn-err" id="err-challandate" style="color: red" hidden>Please provide challan date</span>
              </li> 
              <?php
              if($file == '') {
              ?>
              <li>
                <label>Upload Challan</label> 
                <input type="file" id="txt-file" name="file" style="width: 100%">
                <span class="spn-err" id="err-file" style="color: red" hidden>Please upload challan</span>
              </li> 
            <?php } else { ?>
              <li>
                <label>Challan</label> 
                <a href="<?php echo $file?>" style="font-size: 12px; color: blue; text-decoration: underline;">View Challan File</a>
              </li> 
              <?php } ?>        
            </ul>
          </div>
          <div class="clear"></div>
          <?php
          if($file == '') {
          ?>
          <div class="apply_now">
            <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_6()">
          </div>
          <?php } ?>
        </div>       
      </div>
    <div class="clear"></div>
  </div>     
                                
<table class="rtable paginated">
    <tr>
      <th class="code colr">CNIC</th>
      <th class="coursename colr">Project</th>
      <th class="time colr">Post</th>
      <th class="location colr">Challan Date</th>
      <th class="location colr">Date Applied</th>
      <th class="location colr">Show</th>
      <th class="location colr">Select to Print</th>
    </tr>
    <?php
  $fetch_post = $this->WebsiteModel->fetch_user_post($id);
  if($fetch_post) {
    foreach($fetch_post as $post) {
      $postid = $post->post_name;
      $project = $post->project;
      $post_name = $this->WebsiteModel->pr_post_name($postid);
      $project_name = $this->WebsiteModel->result_name($project)['name'];
      $post_ad = $this->WebsiteModel->result_name($project)['advertisement'];
?>
    <tr>
      <td><?php echo $this->WebsiteModel->fetch_user_cnic($id);?></td>
      <td><?php echo $project_name;?></td>
      <td><?php echo $post_name;?></td>
     <td><?php echo $post->challan_date;?></td>
     <td><?php echo $post->date_applied;?></td>
     <td class="location"><a href='<?php echo base_url()?>website/Signup/Post?id=<?php echo $id?>&project_id=<?php echo $project?>&post_id=<?php echo $postid; ?>' class="colr"><b>Show</b></a></td>
     <?php if($post->user_approved == 1 && $post->challan_submitted == 1) { ?>
     <td class="location"><a href='<?php echo base_url()?>website/Rollnoslips/slip?user_id=<?php echo $id?>&post_id=<?php echo $postid?>' class="colr"><b>Print</b></a></td>
    <?php } else if($post->user_approved == 0 && $post->challan_submitted == 1) { ?>
      <td class="location"><a href='<?php echo base_url()?>website/Rollnoslips/pending_slip?user_id=<?php echo $id?>&post_id=<?php echo $postid?>' class="colr"><b>Print</b></td></a></td>
    <?php } else { ?>
      <td class="location"><b>Challan Submission Required</b></td></td>
    <?php } ?>
    </tr>
<?php }} ?>
</table>
            
            </div>  
    <div class="clear"></div>
  </div>
</div>  

<script src="<?php echo base_url()?>assets/scripts/signup/add_6.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>

<script type="text/javascript">

 $(document).ready(function() {

    $('.ad').change(function() {
        get_projects();
    });

      function get_projects() {
          var classs = $('.ad').val();
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