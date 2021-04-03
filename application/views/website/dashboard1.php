<head>
<style>
    ul.inquiryform li input {
    width: 225px;
    }
    ul.inquiryform li select {
    width: 240px;
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
    .pz-style {
        border: 2px solid #01411c;
    padding: 37px 0px;
    box-shadow: 0px 0px #01411c;
    margin: 0px 8px;
    width: 150px;
    height: 72px;
    border-radius: 50%;
    align-items: center;
    text-align: center;
}
.pz-style h5 {
    margin-top: 3px;
    font-size: 18px;
}
.form {
    float: unset; 
}
.contentblock{
  margin-top: 40px;
}
</style>
</head>


<div id="content_section">
  <div class="contentblock">
    <div class="search_course pz-center">
      <a class="pz-dashboard-2" href="<?php echo base_url()?>website/Signin/logout">Logout</a>
        <div class="box">
          <div class="form">
            <h3>Dashboard</h3>
                             <div class="catogary_images">
                              <div class="image1">
                                <div class="pz-style">
                                <a href="<?php echo base_url()?>website/Signup/Biodata?id=<?php echo $this->input->get('id'); ?>">
                                  <img src="<?php echo base_url()?>assets/images/dash-1.png" alt="" />
                                  <h5>Bio Date</h5>
                                </a>
                              </div>
                              </div> 

                              <div class="image2">
                                <div class="pz-style">
                                <a href="<?php echo base_url()?>website/Signup/Education?id=<?php echo $this->input->get('id'); ?>">
                                  <img src="<?php echo base_url()?>assets/images/dash-2.png" alt="" />
                                  <h5>Education</h5>
                                </a>
                              </div>
                              </div> 

                              <div class="image3">
                                <div class="pz-style">
                                <a href="<?php echo base_url()?>website/Signup/Experience?id=<?php echo $this->input->get('id'); ?>">
                                  <img src="<?php echo base_url()?>assets/images/dash-3.png" alt="" />
                                  <h5>Experience</h5>
                                </a>
                              </div>
                              </div>

                              <div class="image3">
                                <div class="pz-style">
                                <a href="challan_form.html">
                                  <img src="images/dash-3.png" alt="" />
                                  <h5>Challan Form</h5>
                                </a>
                              </div>
                              </div> 
 

                              <div class="image4">
                                <div class="pz-style">
                                <a href="<?php echo base_url()?>website/Signup/Post?id=<?php echo $this->input->get('id'); ?>">
                                  <img src="<?php echo base_url()?>assets/images/dash-4.png" alt="" />
                                  <h5>Apply Post</h5>
                                </a>
                              </div> 
                             </div>
                           </div>
                 </div>
                                                    <div class="clear"></div>
                                                    
                                                    <!-- apply now -->
                                                  
                                            
                                                </div>       
                                               
                                            </div>
                                        <div class="clear"></div>
                               	 	</div>	   
                               	

            
            </div>	
		<div class="clear"></div>
	</div>
</div> 