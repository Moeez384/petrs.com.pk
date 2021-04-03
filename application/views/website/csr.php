
                    <div class="clear"></div>
			 
                <div class="static_content pad2">
                <div class="staticblock2 pz-single ">
                        
                  <?php 
                        $csr = $this->WebsiteModel->fetch_csr();
                        if($csr) {
                            foreach($csr as $c) {
                        ?>
                            <h3 class="heading-h5"><?php echo $c->title;?></h3>
                            <p><?php echo $c->details;?></p>
                        <?php }} else { ?>
                            <h3 class="heading-h5"></h3>
                            <p><?php ?></p>
                        <?php } ?>
                    </div>
                </div>
                 
                  </div>
                <div class="clear"></div>
			<!-- Slder -->	
            	<div class="image_scroll">
                	<a class="leftarrow" href="#"><img src="images/left_arrow.gif"  alt="" /></a>
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
                    <a class="leftarrow" href="#"><img src="<?php echo base_url()?>assets/images/right_arrow.gif"  alt="" /></a>
                </div>
            </div>	
		<div class="clear"></div>
	</div>