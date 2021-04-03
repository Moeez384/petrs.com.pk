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
        width:375px;
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
    float: unset;
    }
    .form img{
   border-radius: 7px;
    box-shadow: 0px 4px 6px 2px;
    margin-bottom: 31px;
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
                    <form method="post" action="<?php echo base_url()?>website/Signup/savebiodata" enctype="multipart/form-data">
                    <h3>Step: 02 of 06 Bio Date.</h3>
                    <input type="text" name="id" value="<?php echo $id;?>" hidden>
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $image;?>" style="width: 120px; height: 110px;" alt="img">
                        <label>Change Image?</label> 
                        <input name="file" type="file" id="txt-file">
                        <span class="spn-err" style="color: red">*Please provide your passport size image. Max size 2MB</span>
                 	<ul class="inquiryform">
                 	     <li>
                        <label>CNIC</label>
                        <input name="cnic" placeholder="00000-0000000-0" id="txt-cnic" type="number" value="<?php echo $cnic;?>">
                        <span class="spn-err" id="err-cnic" style="color: red" hidden>Please provide cnic</span>
                        </li> 
                 	    <li>
                        <label>Name </label>	
                        <input name="name" type="text" value="<?php echo $name;?>" id="txt-name">
                        <span class="spn-err" id="err-name" style="color: red" hidden>Please provide name</span>
                        </li> 
                        <li>
                        <label>Father_Name </label>	
                        <input name="father_name" type="text" value="<?php echo $father_name;?>" id="txt-fname">
                        <span class="spn-err" id="err-fname" style="color: red" hidden>Please provide father name</span>
                        </li> 
                       <li>
                        <label>Father's Occupation </label>	
                        <input name="father_occupation" type="text" value="<?php echo $father_occupation != '' ? $father_occupation : '';?>" id="txt-fatherocc">
                        <span class="spn-err" id="err-fatherocc" style="color: red" hidden>Please provide father occupation</span>
                        </li> 
                         <li>
                        <label> Husband's Name </label>	
                        <input name="husband_name" value="<?php echo $husband_name != '' ? $husband_name : '';?>" type="text"/>
                        </li> 
                         <li>
                        <label>Husband Occupation </label>	
                        <input name="husband_occupation" value="<?php echo $husband_occupation != '' ? $husband_occupation : '';?>" type="text"/>
                        </li> 
                         <li>
                        <label>Date_of_Brith</label>	
                        <input name="date_of_brith" value="<?php echo $date_of_birth != '' ? $date_of_birth : '';?>" type="date" id="txt-dob">
                        <span class="spn-err" id="err-dob" style="color: red" hidden>Please provide date of birth</span>
                        </li> 
                        <li>
                         <label>Gender</label>
                           <select name="gender" id="txt-gender">
                            <?php if($gender != '') { ?>
                     	     <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                           <?php if($gender == 'Female') { ?>
	                         <option value="Male">Male</option>
                          <?php } else if($gender == 'Male') { ?>
                            <option value="Female">Female</option>
                            <?php }} else { ?>
                              <option value=""></option>
  	                         <option value="Female">Female</option>
                             <option value="Male">Male</option>
                          <?php } ?>
	                     </select>
                         <span class="spn-err" id="err-gender" style="color: red" hidden>Please provide gender</span>
	                     </li>
	                      <li>
                         <label>Religion</label>
                           <select name="religion" id="txt-religion">
                            <?php if($religion != '') { ?>
                           <option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
                           <?php if($religion == 'Islam') { ?>
                             <option value="Chirstian">Chirstian</option>
                             <option value="Hindoisum">Hindoisum</option>
                             <option value="Other">Other</option>
                          <?php } else if($religion == 'Chirstian') { ?>
                             <option value="Islam">Islam</option>
                             <option value="Hindoisum">Hindoisum</option>
                             <option value="Other">Other</option>
                            <?php } else if($religion == 'Hindoisum') {?>
                           <option value="Islam">Islam</option>
                           <option value="Chirstian">Chirstian</option>
                           <option value="Other">Other</option>
                          <?php } else if($religion == 'Other') { ?>
                            <option value="Islam">Islam</option>
                           <option value="Chirstian">Chirstian</option>
                             <option value="Hindoisum">Hindoisum</option>
                          <?php }} else { ?>
                     	     <option value=""></option>
	                         <option value="Islam">Islam</option>
	                         <option value="Chirstian">Chirstian</option>
                             <option value="Hindoisum">Hindoisum</option>
	                         <option value="Other">Other</option>
                         <?php }?>
	                     </select>
                         <span class="spn-err" id="err-religion" style="color: red" hidden>Please provide religion</span>
	                     </li>
	                     <li>
                         <label>Local/Domicile</label>
                           <select name="local" id="txt-local">
                            <?php if($domicile != '') { ?>
                              <option value="<?php echo $domicile; ?>"><?php echo $domicile; ?></option>
                             <?php if($domicile == 'Local') { ?>
                                <option value="Domicile">Domicile</option>
                             <?php } else if($domicile == 'Domicile') { ?>
                                <option value="Local">Local</option>
                            <?php }} else { ?>
                         	     <option value=""></option>
    	                         <option value="Local">Local</option>
    	                         <option value="Domicile">Domicile</option>
                         <?php } ?>
	                     </select>
                         <span class="spn-err" id="err-local" style="color: red" hidden>Please provide local/domicile</span>
	                     </li>
	                      <li>
                         <label>District</label>
                             <select name="district" id="txt-district">
                            <?php if($district != '') { ?>
                              <option value="<?php echo $district ?>"><?php echo $district ?></option>
	                            <option value="OTHER">OTHER</option>
                            	<option value="AWARAN">AWARAN</option>
                            	<option value="BARKHAN">BARKHAN</option>
                            	<option value="BOLAN">BOLAN</option>
                            	<option value="CHAGHI">CHAGHI</option>
                            	<option value="DERA BUGTI">DERA BUGTI</option>
                            	<option value="DISABLED">DISABLED</option>
                            	<option value="Dukki">Dukki</option>
                            	<option value="GWADAR">GWADAR</option>
                            	<option value="HARNAI">HARNAI</option>
                            	<option value="JAFFERABAD">JAFFERABAD</option>
                            	<option value="JHALMAGSI">JHALMAGSI</option>
                            	<option value="KALAT">KALAT</option>
                            	<option value="KACHI (BOLAN)">KACHI (BOLAN)</option>
                            	<option value="KECH">KECH</option>
                            	<option value="KHARAN">KHARAN</option>
                            	<option value="KACHI">KACHI</option>
                            	<option value="KHUZDAR">KHUZDAR</option>
                            	<option value="KOHLU">KOHLU</option>
                            	<option value="LASBELA">LASBELA</option>
                            	<option value="LEHRI">LEHRI</option>
                            	<option value="LORALAI">LORALAI</option>
                            	<option value="MASTUNG">MASTUNG</option>
                            	<option value="MUSA KHEL">MUSA KHEL</option>
                            	<option value="NASIRABAD">NASIRABAD</option>
                            	<option value="NOSHKI">NOSHKI</option>
                            	<option value="PANJGUR">PANJGUR</option>
                            	<option value="PISHIN">PISHIN</option>
                            	<option value="QILLA ABDULLAH">QILLA ABDULLAH</option>
                            	<option value="QILLA SAIFULLAH">QILLA SAIFULLAH</option>
                            	<option value="QUETTA (ZONE)">QUETTA (ZONE)</option>
                            	<option value="QUETTA (CITY)">QUETTA (CITY)</option>
                            	<option value="SIBI">SIBI</option>
                            	<option value="SOHBAT PUR">SOHBAT PUR</option>
                            	<option value="SHERANI">SHERANI</option>
                            	<option value="WASHUK">WASHUK</option>
                            	<option value="ZHOB">ZHOB</option>
                            	<option value="ZIARAT">ZIARAT</option>
                            <?php } else { ?>
                              <option value="OTHER">OTHER</option>
                              <option value="AWARAN">AWARAN</option>
                              <option value="BARKHAN">BARKHAN</option>
                              <option value="BOLAN">BOLAN</option>
                              <option value="CHAGHI">CHAGHI</option>
                              <option value="DERA BUGTI">DERA BUGTI</option>
                              <option value="DISABLED">DISABLED</option>
                              <option value="Dukki">Dukki</option>
                              <option value="GWADAR">GWADAR</option>
                              <option value="HARNAI">HARNAI</option>
                              <option value="JAFFERABAD">JAFFERABAD</option>
                              <option value="JHALMAGSI">JHALMAGSI</option>
                              <option value="KALAT">KALAT</option>
                              <option value="KACHI (BOLAN)">KACHI (BOLAN)</option>
                              <option value="KECH">KECH</option>
                              <option value="KHARAN">KHARAN</option>
                              <option value="KACHI">KACHI</option>
                              <option value="KHUZDAR">KHUZDAR</option>
                              <option value="KOHLU">KOHLU</option>
                              <option value="LASBELA">LASBELA</option>
                              <option value="LEHRI">LEHRI</option>
                              <option value="LORALAI">LORALAI</option>
                              <option value="MASTUNG">MASTUNG</option>
                              <option value="MUSA KHEL">MUSA KHEL</option>
                              <option value="NASIRABAD">NASIRABAD</option>
                              <option value="NOSHKI">NOSHKI</option>
                              <option value="PANJGUR">PANJGUR</option>
                              <option value="PISHIN">PISHIN</option>
                              <option value="QILLA ABDULLAH">QILLA ABDULLAH</option>
                              <option value="QILLA SAIFULLAH">QILLA SAIFULLAH</option>
                              <option value="QUETTA (ZONE)">QUETTA (ZONE)</option>
                              <option value="QUETTA (CITY)">QUETTA (CITY)</option>
                              <option value="SIBI">SIBI</option>
                              <option value="SOHBAT PUR">SOHBAT PUR</option>
                              <option value="SHERANI">SHERANI</option>
                              <option value="WASHUK">WASHUK</option>
                              <option value="ZHOB">ZHOB</option>
                              <option value="ZIARAT">ZIARAT</option>
                              <option selected="selected" value=""></option>
                            <?php } ?>
	                     </select>
                         <span class="spn-err" id="err-district" style="color: red" hidden>Please provide local/domicile</span>
	                     </li>
	                   <li>
                        <label>Permanent Address</label>	
                        <input name="permanent_address" value="<?php echo $per_address != '' ? $per_address : '';?>" type="text" id="txt-peraddress">
                        <span class="spn-err" id="err-peraddress" style="color: red" hidden>Please provide permenant address</span>
                        </li>
                        <li>
                        <label>Postal Adress: (Police station)</label>	
                        <input name="postal_address" value="<?php echo $postal_address != '' ? $postal_address : '';?>" type="text">
                        </li>
                        <li>
                        <label>Res_Phone </label>	
                        <input name="res_phoneno" value="<?php echo $res_phone != '' ? $res_phone : '';?>" type="text" />
                        </li>
                        <li>
                        <label>Office_Phone </label>	
                        <input name="office_phoneno" value="<?php echo $office_phone != '' ? $office_phone : '';?>" type="text" />
                        </li>
                        <li>
                        <label>Mobile No </label>	
                        <input name="mobile_no" type="text" value="<?php echo $number;?>" id="txt-number">
                        <span class="spn-err" id="err-number" style="color: red" hidden>Please provide mobile number</span>
                        </li>
                        <li>
                        <label>Email Adress </label>	
                        <input name="email" type="email" value="<?php echo $email;?>" id="txt-email">
                        <span class="spn-err" id="err-email" style="color: red" hidden>Please provide email address</span>
                        </li> 
                        <li class="pz-select">
                          <?php if($govt_service == 1) { ?>
                            <input type="checkbox" id="" name="govt_service" value="1" checked>
                            <label for="govt_service"> Govt Service</label>
                          <?php } else { ?>
                            <input type="checkbox" id="" name="govt_service" value="1">
                            <label for="govt_service"> Govt Service</label>
                          <?php } ?>
                            
                          <?php if($disability == 1) { ?>
                            <input type="checkbox" id="" name="disability" value="1" checked>
                            <label for="disability"> Disability</label>
                          <?php } else { ?>
                            <input type="checkbox" id="" name="disability" value="1">
                            <label for="disability"> Disability</label>
                          <?php } ?> 

                          <?php if($armed_force == 1) { ?>
                            <input type="checkbox" id="" name="armed" value="1">
                            <label for="armed"> Armed Forces person</label>
                          <?php } else { ?>
                            <input type="checkbox" id="" name="armed" value="1">
                            <label for="armed"> Armed Forces person</label>
                          <?php } ?>  
                            
                            
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                  <div class="apply_now">
                  <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_2()">
                </div>
                </div>       
            </div>
        <div class="clear"></div>
    </div>	   
</div>	
<div class="clear"></div>
</div>
</div>    


<script src="<?php echo base_url()?>assets/scripts/signup/add_2.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>











