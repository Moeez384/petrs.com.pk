        <!-- Content Seciton -->
        	
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	<!-- Banner -->
                        	<div id="banner1">
									<a href="#"><img src="images/newsbanner.gif" alt="" /></a>
                                <div class="heading">
                                	<h1>College News and Events</h1>
                                </div>
                           </div>
                         <!-- Content Links -->
                         	<div class="content_links">
                            	<ul>
                            		<li><a class="our_university" href="#">Our University</a></li>
                                    <li><a class="admission" href="#">Admissions</a></li>
                                    <li><a class="accommodaiton" href="#">Accommodations</a></li>
                                    <li><a class="community" href="#">Community</a></li>
                                    <li><a class="schorship" href="#">Scholorships</a></li>
                                    <li class="last"><a class="take_tour" href="#">Take a Tour</a></li>
                                </ul>
                            </div>  
                         <!-- Content Heading -->
                         	<div id="content2">	
                                
                                <!-- News Listing -->
                                <ul class="listing">
                                    <?php
                                    $all_news = $this->WebsiteModel->all_news();
                                    if($all_news) {
                                        foreach($all_news as $nw) {
                                    ?>
                                	<li>
                                        <?php if($nw->image != '') { ?>
                                		<div class="thumb"><a href="#"><img style="width: 125px; height: 125px;" src="<?php echo base_url()?>uploads/news/<?php echo $nw->image; ?>"  alt="" /></a></div> <?php } else { ?>
                                            <div class="thumb"><a href="#"><img src="<?php echo base_url()?>assets/images/news1.gif"  alt="" /></a></div>
                                        <?php } ?>
                                        <div class="description">
                                        	<h6><a href="#" class="colr"><?php echo $nw->title; ?></a></h6>
                                            <p>
                                               <?php echo $nw->details; ?>
                                            </p>
                                            <div class="clear"></div>
                                            <div class="info">
                                            	<span class="lastupdte"> Last Updated by:<i><?php echo $nw->created_date;?></i></span>
                                            </div>
                                         </div>
                                         <div class="clear"></div>
                                	</li>
                                <?php } } ?>
                                </ul>

                                <br><br><br>
	</div>
</div>    