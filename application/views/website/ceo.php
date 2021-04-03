
                    <div class="clear"></div>
				<div class="static_content">
                        <h2 class="hpad">CEO Message</h2> 
                </div>  
                <?php 
                        $ceo_msg = $this->WebsiteModel->fetch_ceo_msg();
                        if($ceo_msg) {
                        foreach($ceo_msg as $msg) {
                        ?>
                <div class="static_content pad2">
                <div class="staticblock2 pz-single ">
                    <table>
                        <tr>
                            <td>
                        <a href="#"><img  src="<?php echo base_url()?>assets/images/challan_logo.png"  alt="" /></a></td>
                        <td>
                        
                        
                        <p><?php echo $msg->message; ?></p>
                    </td>
                    </tr>
                       </table>
                    </div>
                </div>
                 <?php }} else { ?>
                        <div class="static_content pad2">
                <div class="staticblock2 pz-single ">
                        <a href="#"><img  src="<?php echo base_url()?>assets/images/staticimgae.gif"  alt="" /></a>
                        <h2 class="hpad">CEO Message</h2> 
                        
                        <p><?php echo ''; ?></p>

                       
                    </div>
                </div>
                        <?php } ?>
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
