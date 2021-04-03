<style type="text/css">
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
                <form method="post" action="<?php echo base_url()?>website/Results/search">
                <div class="form">
                   <!--  <?php 
                    $id = $this->input->get('id'); //result_id
                    $pr_id = $this->WebsiteModel->resultt($id)['name'];
                    $result_name = $this->WebsiteModel->get_postt_name($pr_id);
                    $test_date = $this->WebsiteModel->get_postt_date($pr_id);
                    ?> -->
                    <h2>Result</h2>
                    <h5><!-- <?php echo $result_name; ?> --></h5>
                    <h6><span class="pz-date">Test Held on:<!--  <?php echo $test_date; ?> --></span></h6>
                 	<ul class="inquiryform">
                         <input name="id" value="<?php echo $id;?>" type="text" hidden>
                        <li>
                            <label>CNIC <input name="cnic" id="txt-cnic" placeholder="0000000000000" type="number"/></label>
                            <span class="spn-err" id="err-cnic" style="color: red" hidden>Please provide cnic</span>
                        </li> 
                        <li>
                            <p><span class="pz-captcha" id="captcha"><?php echo generateRandomStringg();?></span></p>
                            <label>Captcha Code</label> 
                            <input name="captcha" type="text" id="txt-cp">
                            <span class="spn-err" id="err-cp" style="color: red" hidden>Please provide captcha</span>
                            <span class="spn-err" id="err-cp1" style="color: red" hidden>Captcha isn't equal. Try again</span>
                        </li>
                    </ul>                   
                 </div>
                 <div class="clear"></div>                               
                 <div class="apply_now">
                    <input type="submit" id="btn-save" name="submit" value="Search" style="background-color: transparent;" class="aply_now btn-submit" onclick="return search()">
                 </div>
            </div>       
        </div>
        <div class="clear"></div>
    </form>
    </div>	   
</div>	
<div class="clear"></div>
</div>
</div> 
  
<!-- <?php 
function generateRandomStringg($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?> -->

<script src="<?php echo base_url()?>assets/scripts/search/search.js"></script>
<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>