<style>
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

.closebtn:hover {
  color: black;
}
.w3review {
  height: 150px;
  width: 320px;
}

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
    margin-bottom: 10px;
}
.form {
    float: unset;
}

</style>

<?php if($this->input->get('expid') == '') { ?>

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
          <form method="post" action="<?php echo base_url()?>website/Signup/save_experience">
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
        <h3>Step: 04 of 06 Experience .</h3>
          <ul class="inquiryform">
            <li>
              <label>From Date</label>	
              <input name="from_date" type="date" id="txt-frmdate">
              <span class="spn-err" id="err-frmdate" style="color: red" hidden>Please provide from date</span>
            </li>
            <li>
              <label>To Date</label>	
              <input name="to_date" type="date" id="txt-todate">
              <span class="spn-err" id="err-todate" style="color: red" hidden>Please provide to date</span>
            </li>
            <li>
              <label>Post Name</label>	
              <input name="post_name" type="text" id="txt-post">
              <span class="spn-err" id="err-post" style="color: red" hidden>Please provide post name</span>
            </li> 
            <li>
              <label>Department Name</label>	
              <input name="department_name" type="text" id="txt-dept">
              <span class="spn-err" id="err-dept" style="color: red" hidden>Please provide department name</span>
            </li> 
            <li>
              <label>Department Type</label>
              <select name="department_type" id="txt-deptype">
                <option value=""></option>
	              <option value="Govt">Govt</option>
                <option value="semi_govt">Semi Govt</option>
                <option value="Private">Private</option>
	            </select>
              <span class="spn-err" id="err-deptype" style="color: red" hidden>Please provide department type</span>
	         </li>
            <li>
              <label>Bps</label>	
              <input name="bps" type="text" id="txt-bps">
              <span class="spn-err" id="err-bps" style="color: red" hidden>Please provide bps</span>
            </li> 
            <li>
              <label>Salary</label>	
              <input name="salary" type="text" id="txt-salary">
              <span class="spn-err" id="err-salary" style="color: red" hidden>Please provide salary</span>
            </li> 
            <li>
              <label>Duties Performed</label>	
              <textarea class="w3review" name="duties" rows="4" cols="32" id="txt-duties"></textarea>
              <span class="spn-err" id="err-duties" style="color: red" hidden>Please provide duties performed</span>
            </li> 
          </ul>
        </div>
        <div class="clear"></div>
          <div class="apply_now">
            <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_4()">
          </div>
        </form>
        <a href="<?php echo base_url().'website/Signup/Challan?id='.$id?>"><input type="button" value="next" style="background-color: red; width: 15%; height: 15%; color: white; padding: 5px; border-radius: 7px; float: right;"></a>
        </div>       
      </div>
      <div class="clear"></div>
    </div>	   
                               	
<table class="rtable paginated">
    <tr>
      <th class="code colr">From Date</th>
      <th class="coursename colr"> To Date</th>
      <th class="time colr">Post Name</th>
      <th class="location colr">Department Name</th>
      <th class="location colr">Department Type</th>
      <th class="location colr">Bps </th>
      <th class="location colr">Update</th>
    </tr>
<?php
$fetch_experience = $this->WebsiteModel->fetch_user_experience($id);
if($fetch_experience) {
  foreach($fetch_experience as $exp) {
?>
    <tr>
      <td><?php echo $exp->from_date;?></td>
      <td><?php echo $exp->to_date;?></td>
      <td><?php echo $exp->post_name;?></td>
     <td><?php echo $exp->dept_name;?></td>
     <td><?php echo $exp->dept_type;?></td>
     <td class="status"><?php echo $exp->bps;?></td>
    <!--  <td class="location"><a href="#" class="colr"><b>Click Here</b></a></td> -->
    <td class="location"><a href="<?php echo base_url().'website/Signup/Experience?expid='.$exp->id;?>" class="colr"><b>Click Here </b></a></td>
    </tr>
  <?php }} ?>
</table>
</div>	
		<div class="clear"></div>
	</div>
</div>  

<?php } else if($this->input->get('expid') != '') { ?>

<div id="content_section">                  
  <div class="contentblock">
    <div class="search_course pz-center">
      <a class="pz-dashboard" href="<?php echo base_url()?>website/index/dashboard?id=<?php echo $this->input->get('id');?>">Go To Dashboard</a>
      <div class="box">
        <div class="alert alert-danger print-error-msg" style="display:none"></div>
                <?php if ($this->session->flashdata('warning')) {?>
                  <div class="alert">
                    <?= $this->session->flashdata('warning') ?> 
                  </div>
                <?php } ?>
        <div class="form">
          <form method="post" action="<?php echo base_url()?>website/Signup/save_experience">
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
            <input type="text" name="exp_id" value="<?php echo $exp_id;?>" hidden>
        <h3>Step: 04 of 06 Experience .</h3>
          <ul class="inquiryform">
            <li>
              <label>From Date</label>  
              <input name="from_date" type="date" id="txt-frmdate" value="<?php echo $from_date != '' ? $from_date : '' ?>">
              <span class="spn-err" id="err-frmdate" style="color: red" hidden>Please provide from date</span>
            </li>
            <li>
              <label>To Date</label>  
              <input name="to_date" type="date" id="txt-todate"  value="<?php echo $to_date != '' ? $to_date : '' ?>">
              <span class="spn-err" id="err-todate" style="color: red" hidden>Please provide to date</span>
            </li>
            <li>
              <label>Post Name</label>  
              <input name="post_name" type="text" id="txt-post"  value="<?php echo $post_name != '' ? $post_name : '' ?>">
              <span class="spn-err" id="err-post" style="color: red" hidden>Please provide post name</span>
            </li> 
            <li>
              <label>Department Name</label>  
              <input name="department_name" type="text" id="txt-dept"  value="<?php echo $dept_name != '' ? $dept_name : '' ?>">
              <span class="spn-err" id="err-dept" style="color: red" hidden>Please provide department name</span>
            </li> 
            <li>
              <label>Department Type</label>
              <select name="department_type" id="txt-deptype">
                <option  value="<?php echo $dept_type != '' ? $dept_type : '' ?>"></option>
                <option value="Govt">Govt</option>
                <option value="semi_govt">Semi Govt</option>
                <option value="Private">Private</option>
              </select>
              <span class="spn-err" id="err-deptype" style="color: red" hidden>Please provide department type</span>
           </li>
            <li>
              <label>Bps</label>  
              <input name="bps" type="text" id="txt-bps"  value="<?php echo $bps != '' ? $bps : '' ?>">
              <span class="spn-err" id="err-bps" style="color: red" hidden>Please provide bps</span>
            </li> 
            <li>
              <label>Salary</label> 
              <input name="salary" type="text" id="txt-salary"  value="<?php echo $salary != '' ? $salary : '' ?>">
              <span class="spn-err" id="err-salary" style="color: red" hidden>Please provide salary</span>
            </li> 
            <li>
              <label>Duties Performed</label> 
              <textarea class="w3review" name="duties" rows="4" cols="32" id="txt-duties"><?php echo $duties != '' ? $duties : '' ?></textarea>
              <span class="spn-err" id="err-duties" style="color: red" hidden>Please provide duties performed</span>
            </li> 
          </ul>
        </div>
        <div class="clear"></div>
          <div class="apply_now">
            <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_4()">
          </div>
        </div>       
      </div>
      <div class="clear"></div>
    </div>     
                                
<table class="rtable paginated">
    <tr>
      <th class="code colr">From Date</th>
      <th class="coursename colr"> To Date</th>
      <th class="time colr">Post Name</th>
      <th class="location colr">Department Name</th>
      <th class="location colr">Department Type</th>
      <th class="location colr">Bps </th>
      <th class="location colr">Update</th>
    </tr>
<?php
$fetch_experience = $this->WebsiteModel->fetch_user_experience($id);
if($fetch_experience) {
  foreach($fetch_experience as $exp) {
?>
    <tr>
      <td><?php echo $exp->from_date;?></td>
      <td><?php echo $exp->to_date;?></td>
      <td><?php echo $exp->post_name;?></td>
     <td><?php echo $exp->dept_name;?></td>
     <td><?php echo $exp->dept_type;?></td>
     <td class="status"><?php echo $exp->bps;?></td>
    <!--  <td class="location"><a href="#" class="colr"><b>Click Here</b></a></td> -->
    <td class="location"><a href="<?php echo base_url().'website/Signup/Experience?expid='.$exp->id;?>" class="colr"><b>Click Here </b></a></td>
    </tr>
  <?php }} ?>
</table>
</div>  
    <div class="clear"></div>
  </div>
</div>  
<?php } ?>

<script src="<?php echo base_url()?>assets/scripts/signup/add_4.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>