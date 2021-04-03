		<!-- Content Seciton -->
        	<div id="content_section">
        		<div class="static_content">
              	        
                </div>	
                <div class="static_content pad2">
                <div class="staticblock2 pz-single pz-img">
                    	<a href="#"><img  src="<?php echo base_url()?>assets/images/about-1.jpg"  alt="" /></a>
                        <h2 class="hpad">About PETRS</h2> 
                        <?php
                        $about = $this->WebsiteModel->fetch_aboutus();
                        if($about) {
                          foreach($about as $ab) {
                        ?>
                        <p><?php echo $ab->message; ?>
                        </p>
                      <?php }} else { ?>
                        <p></p>
                      <?php } ?>
                        
                 <p class="clear"></p>
                    </div>
                </div>
             <div class="clear"></div>
			</div>
        <!-- Slder -->  
              <div class="image_scroll">
                  <a class="leftarrow" href="#"><img src="<?php echo base_url()?>assets/images/left_arrow.gif"  alt="" /></a>
                      <div class="slider1">
                          <ul>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider1.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider2.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider3.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider4.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider5.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider6.gif"  alt="" /></a></li>
                        </ul>
                        </div>  
                    <a class="rightarrow" href="#"><img src="<?php echo base_url()?>assets/images/right_arrow.gif"  alt="" /></a>
                </div>
            </div>  
    <div class="clear"></div>
	</div>
</div>    