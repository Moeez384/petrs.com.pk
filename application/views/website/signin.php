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
.search_course {
    width: 352px !important;
  }
  .pregrap ul{
    font-size: 15px;
    line-height: 25px;
  }
  .pregrap p{
    font-size: 15px;
    line-height: 25px;
    color: green;
  }
</style>

<div id="content_section">
    <div class="contentblock">
        <div class="search_course pz-center">
            <div class="box">
                <div class="alert alert-danger print-error-msg" style="display:none"></div>
                <?php if ($this->session->flashdata('warning')) {?>
                  <div class="alert">
                    <?= $this->session->flashdata('warning') ?>
                  </div>
                <?php } ?>
                <div class="form">
                    <form method="post" action="<?php echo base_url()?>website/Signin/verify_user">
                    <h3>Candidate Login.</h3>
                 	<ul class="inquiryform">
                        <li>
                            <label>CNIC</label>
                            <input name="cnic" placeholder="0000000000000" type="number" id="txt-cnic">
                            <span class="spn-err" id="err-cnic" style="color: red" hidden>Please provide cnic</span>
                        </li>
                        <li>
                            <label>Email </label>
                            <input name="email" type="text" placeholder="em@gmail.com" id="txt-email">
                            <span class="spn-err" id="err-email" style="color: red" hidden>Please provide email</span>
                        </li>
                        <li>
                        <label>Password</label>
                        <input name="password" type="password" placeholder="*******" id="txt-pass">
                        <span class="spn-err" id="err-pass" style="color: red" hidden>Please provide password</span>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="apply_now">
                    <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit" onclick="return SignIn()">
                </div>
                <div class="signup"><a href="<?php echo base_url()?>website/Signup">Registration / SignUp</a> <a href="recover-password.html" style="float: right;">Forget Password</a></div>
            </div>

        </div>
    <div class="clear"></div>
    <div class="pregrap">
             <h3 style="font-size: 20px;margin-bottom:15px"> Applicants may please note that:</h3>
             <ul>
<li>No hardcopy of application or copies of documents are required to be forwarded to PETRS.</li>
<li>The printed online application should be retained by the applicants for their own record.</li>
<li>Do not send Bank Challan/ Treasury Receipt to BPSC, It should be preserved in save custody by applicant and has to be produced at time of appearing in the Exam.</li>
<li>Submitting online applications without having required Qualification, Experience, Gender, Religion, Local/Domicile etc or submitting fake/bogus online applications may cause serious difficulty for applicant in future.</li>

</ul>
<p>or any technical assistance regarding applying online, contact on the number <b>(0302-3890590)</b> during office hours from Monday to Friday.
            </div>
</div>
 </div>
<div class="clear"></div>
</div>
</div>

<script src="<?php echo base_url()?>assets/scripts/signin/signin.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>
