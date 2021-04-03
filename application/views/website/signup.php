<meta name="viewport" content="width=device-width, initial-scale=1">
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
    width: 290px;
  }
  ul.inquiryform{
    column-count: 2;
  }
  .form {
     width: unset;
    }
    .apply_now{
      margin-top: 30px;
    }
    
</style>

<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <div class="contentblock">
        <!-- Search Course -->
        <div class="search_course pz-center">
            <div class="box">
              <div class="alert alert-danger print-error-msg" style="display:none"></div>
                <?php if ($this->session->flashdata('warning')) {?>
                  <div class="alert">
                    <?= $this->session->flashdata('warning') ?> 
                  </div>
                <?php } ?>
                <form method="post" action="<?php echo base_url()?>website/Signup/save"  enctype="multipart/form-data">
                <div class="form">
                    <h3>Step: 01 of 06 Registration.</h3>
                 	<ul class="inquiryform">
                    <input name="user_name" id="txt-user" type="text" hidden>
                 	    <li>
                        <label>Name </label>	
                        <input name="user_name" id="txt-name" type="text" />
                        <span class="spn-err" id="err-name" style="color: red" hidden>Please provide name</span>
                        </li> 
                        <li>
                        <label>Father's Name </label>	
                        <input name="father_name" id="txt-fname" type="text" />
                        <span class="spn-err" id="err-fname" style="color: red" hidden>Please provide father's name</span>
                        </li> 
                        <li>
                        <label>CNIC </label>
                        <input name="cnic" id="txt-cnic" placeholder="0000000000000" type="number" />
                        <span class="spn-err" id="err-cnic" style="color: red" hidden>Please provide cnic number</span>
                        </li> 
                        <li>
                        <label>Email </label>	
                        <input name="email" id="txt-email" type="email" />
                        <span class="spn-err" id="err-email" style="color: red" hidden>Please provide email</span>
                        </li> 
                         <li>
                        <label>Phone Number </label>	
                        <input name="phone" id="txt-phone" type="text"/>
                        <span class="spn-err" id="err-phone" style="color: red" hidden>Please provide phone number</span>
                        </li>
                        <li>
                        <label>Password</label>	
                        <input name="password" id="txt-pass" type="password" />
                        <span class="spn-err" id="err-pass" style="color: red" hidden>Please provide password</span>
                        </li>
                        <li>
                        <label>Confirnm Password</label>	
                        <input name="confirm_pass" id="txt-confirmpass" type="password" />
                        <span class="spn-err" id="err-confirmpass" style="color: red" hidden>Please provide confirm password</span>
                        <span class="spn-err2" id="err-confirmpass2" style="color: red" hidden>Passwords should be equal</span>
                        </li>
                        <li>
                        <p><span class="pz-captcha" id="captcha"><?php echo $captcha;?></span></p>
                        <label>Captcha Code</label>	
                        <input name="captcha" type="text" id="txt-cp">
                        <span class="spn-err" id="err-cp" style="color: red" hidden>Please provide captcha</span>
                        <span class="spn-err" id="err-cp1" style="color: red" hidden>Captcha isn't equal. Try again</span>
                        </li>
                        <li>
                        <label>Image</label> 
                        <input name="file" type="file" id="txt-file">
                        <span class="spn-err" id="err-file" style="color: red">*Please provide your passport size image. Max size 2MB</span>
                        <span class="spn-err" id="err-file" style="color: red" hidden>Please provide image</span>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                <!-- apply now -->
                <div class="apply_now">
                  <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SaveSignup_1()">
                </div>
                </form>
                    <div class="signup"> <a href="<?php echo base_url()?>website/Signin" style="float: right;">Sign In</a></div>
            </div>       
        </div>
        <div class="clear"></div>
    </div>	   
</div>	
<div class="clear"></div>
	</div>
</div>    


<script src="<?php echo base_url()?>assets/scripts/signup/add_1.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>
<?php 
// function generateRandomString($length = 10) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }

?>