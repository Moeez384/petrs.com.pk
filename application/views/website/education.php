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
     .course_listing li.location {
    width: 212px;
    padding-left: 13px;
    border-right: 0px;
}
.course_listing li.code {
    width: 50px;
    text-align: center;
}
.course_listing li.location {
    width: 212px;
    padding-left: 13px;
    border-right: 0px;
}

.course_listing li.time {
    width: 152px;
    padding-left: 13px;
}
.course_listing li.coursename {
    width: 252px;
    padding-left: 13px;
}

.sheadings {
    padding-bottom: 4px;
    padding-top: 20px;
}
.dis-top{
    float:right;
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
.inquiryform li:last-child{
  margin-bottom: 10px;
}
.form {
    width: unset;
    float: unset;
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


  
</style>
</head>
<body>
<?php if($this->input->get('eduid') != '') { ?>
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
        <form method="post" action="<?php echo base_url()?>website/Signup/save_education">
          <input type="text" name="id" value="<?php echo $id;?>" hidden>

          <input type="text" name="edu_id" value="<?php echo $edu_id != '' ? $edu_id : '';?>" hidden>
        <h3>Step: 03 of 06 Education.</h3>
          <ul class="inquiryform">
            <li>
              <label>Degree Name </label>	
              <input name="degree_name" id="txt-degree" type="text" value="<?php echo $degree_name != '' ? $degree_name : '';?>">
              <span class="spn-err" id="err-degree" style="color: red" hidden>Please provide degree name</span>
            </li> 
            <li>
              <label>Institute Name</label>	
              <input name="institute_name" id="txt-ins" type="text" value="<?php echo $institute != '' ? $institute : '';?>">
              <span class="spn-err" id="err-ins" style="color: red" hidden>Please provide institute name</span>
            </li> 
            <li>
              <label>Degree Type</label>
              <select name="degree_type" id="txt-degreetype">
                <option value="<?php echo $degree_type != '' ? $degree_type : '';?>"></option>
	              <option value="A-Matric">Matric</option>
                <option value="B-Inter">Inter</option>
                <option value="C-Graduation">Graduation</option>
                <option value="D-Master">Master</option>
            		<option value="G-Diploma">Diploma</option>
                <option value="Y-M.Phil">M.Phil</option>
                <option value="Z-PHD">PHD</option>
                <option value="Othere">Othere</option>
	           </select>
             <span class="spn-err" id="err-degreetype" style="color: red" hidden>Please provide degree type</span>
	         </li>
          <li>
            <label>Bord / University Name </label>	
            <input name="board_name" id="txt-board" type="text" value="<?php echo $board_name != '' ? $board_name : '';?>">
            <span class="spn-err" id="err-board" style="color: red" hidden>Please provide board/university name</span>
          </li> 
          <li>
            <label>Passing Date</label>	
            <input name="passing_date" id="txt-passdate" type="date" value="<?php echo $passing_date != '' ? $passing_date : '';?>" >
            <span class="spn-err" id="err-passdate" style="color: red" hidden>Please provide passing date</span>
          </li> 
          <li>
          <label>Total Marks</label>	
          <input name="total_marks" type="number" value="<?php echo $total_marks != '' ? $total_marks : '';?>">
          </li> 
          <li>
          <label>Obtained Marks </label>	
          <input name="obtained_marks" type="number" value="<?php echo $obtained_marks != '' ? $obtained_marks : '';?>">
          </li> 
          <li>
            <label>Exam System </label>
              <select name="exam_system" id="txt-examsystem">
                <option value="<?php echo $exam_system != '' ? $exam_system : '';?>"></option>
	              <option value="Annual">Annual</option>
	              <option value="Semaster">Semester</option>
	            </select>
              <span class="spn-err" id="err-examsystem" style="color: red" hidden>Please provide exam system</span>
	        </li>
	        <li>
            <label>Division </label>
            <select name="division">
              <option value="<?php echo $division != '' ? $division : '';?>"></option>
	            <option value="1st">1st</option>
	            <option value="2nd">2nd</option>
              <option value="3rd">3rd</option>
	          </select>
	       </li>
	       <li>
          <label>CGPA </label>	
          <input name="cgpa" value="<?php echo $cgpa != '' ? $cgpa : '';?>">
          </li>
          <li >
            <label>Optional Subjects</label>	
            <input id="abc" name="optional_subjects" type="text" value="<?php echo $optional_subjects != '' ? $optional_subjects : '';?>">
          </li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="apply_now">
          <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_3()">
                </div>
      </div>       
    </div>
    <div class="clear"></div>
  </div>	   
</div>
<table class="rtable paginated">
  <tr>
      <th class="code colr">CNIC</th>
      <th class="coursename colr">Degree</th>
      <th class="time colr">Total Marks</th>
      <th class="location colr">Obtained Marks</th>
      <th class="location colr">CGPA</th>
      <th class="location colr">Passing Year</th>
      <th class="location colr">Update</th>
  </tr>
  <?php
$fetch_education = $this->WebsiteModel->fetch_user_education($id);
if($fetch_education) {
  foreach($fetch_education as $edu) {

?>
    <tr>
      <td><?php echo $this->WebsiteModel->fetch_user_cnic($id);?></td>
      <td ><?php echo $edu->degree_name; ?></td>
      <td><?php echo $edu->total_marks ;?></td>
     <td><?php echo $edu->obtained_marks; ?></td>
     <td><?php echo $edu->cgpa; ?></td>
     <td class="status"><b><?php echo $edu->passing_date; ?></b></td>
     <td class="location"><a href="<?php echo base_url().'website/Signup/Education?eduid='.$edu->id;?>" class="colr"><b>Click Here </b></a></td>
    </tr>
  <?php }} ?>
</table>
    <div class="clear"></div>
  </div>
</div>  	
<?php } else { ?>
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
        <form method="post" action="<?php echo base_url()?>website/Signup/save_education">
          <input type="text" name="id" value="<?php echo $id;?>" hidden>
        <h3>Step: 03 of 06 Education.</h3>
          <ul class="inquiryform">
            <li>
              <label>Degree Name </label> 
              <input name="degree_name" id="txt-degree" type="text">
              <span class="spn-err" id="err-degree" style="color: red" hidden>Please provide degree name</span>
            </li> 
            <li>
              <label>Institute Name</label> 
              <input name="institute_name" id="txt-ins" type="text">
              <span class="spn-err" id="err-ins" style="color: red" hidden>Please provide institute name</span>
            </li> 
            <li>
              <label>Degree Type</label>
              <select name="degree_type" id="txt-degreetype">
                <option value=""></option>
                <option value="A-Matric">Matric</option>
                <option value="B-Inter">Inter</option>
                <option value="C-Graduation">Graduation</option>
                <option value="D-Master">Master</option>
                <option value="G-Diploma">Diploma</option>
                <option value="Y-M.Phil">M.Phil</option>
                <option value="Z-PHD">PHD</option>
                <option value="Othere">Othere</option>
             </select>
             <span class="spn-err" id="err-degreetype" style="color: red" hidden>Please provide degree type</span>
           </li>
          <li>
            <label>Bord / University Name </label>  
            <input name="board_name" id="txt-board" type="text">
            <span class="spn-err" id="err-board" style="color: red" hidden>Please provide board/university name</span>
          </li> 
          <li>
            <label>Passing Date</label> 
            <input name="passing_date" id="txt-passdate" type="date">
            <span class="spn-err" id="err-passdate" style="color: red" hidden>Please provide passing date</span>
          </li> 
          <li>
          <label>Total Marks</label>  
          <input name="total_marks" type="number">
          </li> 
          <li>
          <label>Obtained Marks </label>  
          <input name="obtained_marks" type="number">
          </li> 
          <li>
            <label>Exam System </label>
              <select name="exam_system" id="txt-examsystem">
                <option value=""></option>
                <option value="Annual">Annual</option>
                <option value="Semaster">Semester</option>
              </select>
              <span class="spn-err" id="err-examsystem" style="color: red" hidden>Please provide exam system</span>
          </li>
          <li>
            <label>Division </label>
            <select name="division">
              <option value=""></option>
              <option value="1st">1st</option>
              <option value="2nd">2nd</option>
              <option value="3rd">3rd</option>
            </select>
         </li>
         <li>
          <label>CGPA </label>  
          <input name="cgpa" value="">
          </li>
          <li>
            <label>Optional Subjects</label>  
            <input name="optional_subjects" type="text" value="">
          </li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="apply_now">
          <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_3()">
      </div>
    </form>
          <a href="<?php echo base_url().'website/Signup/Experience?id='.$id?>"><input type="button" value="next" style="background-color: red; width: 15%; height: 15%; color: white; padding: 5px; border-radius: 7px; float: right;"></a>
      </div>       
    </div>
    <div class="clear"></div>
  </div>     
</div>
<table class="rtable paginated">
  <tr>
      <th class="code colr">CNIC</th>
      <th class="coursename colr">Degree</th>
      <th class="time colr">Total Marks</th>
      <th class="location colr">Obtained Marks</th>
      <th class="location colr">CGPA</th>
      <th class="location colr">Passing Year</th>
      <th class="location colr">Update</th>
  </tr>
<?php
$fetch_education = $this->WebsiteModel->fetch_user_education($id);
if($fetch_education) {
  foreach($fetch_education as $edu) {

?>
    <tr>
      <td><?php echo $this->WebsiteModel->fetch_user_cnic($id);?></td>
      <td ><?php echo $edu->degree_name; ?></td>
      <td><?php echo $edu->total_marks ;?></td>
     <td><?php echo $edu->obtained_marks; ?></td>
     <td><?php echo $edu->cgpa; ?></td>
     <td class="status"><b><?php echo $edu->passing_date; ?></b></td>
     <td class="location"><a href="<?php echo base_url().'website/Signup/Education?eduid='.$edu->id;?>" class="colr"><b>Click Here </b></a></td>
    </tr>
  <?php }} ?>
</table>
    <div class="clear"></div>
  </div>
</div>  
<?php } ?>
  

<script src="<?php echo base_url()?>assets/scripts/signup/add_3.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>