<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETRS</title>
<!-- Stylesheet -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/popbox.css" />

<!-- Javascript -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/ddsmoothmenu.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/contentslider.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easing.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/DIN_500.font.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/popbox.js"></script>
<script>
// <![CDATA[
wReady=function(f,w){var r=document.readyState;w||r!="loading"?r!="complete"?window.addEventListener("load",function(){f(3)}):f(3):document.addEventListener("DOMContentLoaded",function(){f(2)&&wReady(f)})}
doInit=function(f,w){(w>1||(w&&document.readyState=="loading")||f(1))&&wReady(f,w>1)}
// ]]>
</script>
</head>
<body>
<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
			<div id="masterhead">
				<!-- Logo -->
              <div class="logo"><a href="<?php echo base_url()?>"><img src="<?php echo base_url();?>assets/images/logo-2.png" alt="" /></a>
                  </div>

                	<!-- masterhead Right Section -->
						<div class="topright_sec">
                    		<!-- top navigation -->
                    			<div class="topnavigation">
                               		<ul>
                                  		<li class="first">&nbsp;</li> 
                                    	<li><a href="#">Top News</a></li>
                                    	<li><a href="#">Events</a></li>
                                        <li><a href="#">Blog</a></li>
                                    	<li><a href="#">Jobs</a></li>
                                    	<li><a href="#">Student Profile </a></li>
                                    	<li><a href="#">Our Campuses</a></li>
                                        <li><a class="nobg" href="#"><img src="<?php echo base_url()?>assets/images/rss.gif"  alt="" /></a></li>
                                    	<li class="last">&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                    			<!-- top search -->
                                	<div class="top_search">

                                        <ul>
                                        	<?php
                                          if(empty($_SESSION['id'])) {

                                          ?>
                                            <!-- <li style="float:right; margin-top:20px;"><a class="pz-search" href="<?php echo base_url('ApplyOnline')?>">Apply Online</a></li> -->
                                            <?php
                                             $visitor_ip=$_SERVER['REMOTE_ADDR'];
                                             $res=$this->Project_model->find($visitor_ip);
                                             if($res==0){
                                              $th=$this->Project_model->insertResult($visitor_ip);
                                             }
                                            $count=$this->Project_model->fetch_row();
                                            ?>
                                            <div style="text-align: right">
                                              <li>Visitor Counter </li>
                                              <br>
                                            <li><?php echo $count; ?></li>
                                            </div>
                                          <?php } else { $id = $_SESSION['id']; ?>
                                            <li style="float:right; margin-top:20px;">&nbsp;<a class="pz-search" href="<?php echo base_url();?>website/Signup/Post?id=<?php echo $id?>">Apply Online</a></li>
                                            <li style="float:right; margin-top:20px;">&nbsp;<a class="pz-search" href="<?php echo base_url();?>website/Signin/logout">Logout</a></li>
                                          <?php } ?>
                                         </ul>
                                    </div>
                         	<div class="clear"> </div>
                    	</div>
                    <div class="clear"></div>
                    	           <!-- Navigation -->
                             <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu">
                                      <ul>
      <li class="first"><a class="selected" href="<?php echo base_url()?>">Home</a></li>
      <li><a href="<?php echo base_url('AboutUs')?>">About Us</a>
          <ul>
            <li><a href="<?php echo base_url('CEO')?>">CEO Message</a></li>
          </ul>
       </li>
       <li><a href="<?php echo base_url('Results')?>">Results</a></li>
       <li><a href="<?php echo base_url('Tests')?>">Tests & Products</a></li>
        <li><a href="<?php echo base_url('Services')?>">Services</a></li>
        <li><a href="<?php echo base_url('Divisions')?>">Divisions</a></li>
        <li><a href="<?php echo base_url('Associates')?>">Associates</a></li>
        <li><a href="<?php echo base_url('CSR')?>">CSR</a></li>
        <li><a href="<?php echo base_url('FAQS')?>">FAQs</a></li>
        <li><a href="<?php echo base_url('ContactUs')?>" class="last">Contact Us</a></li>
                                      </ul>
                                  </div>
                           <!-- navigation ends -->
             	     <div class="clear"></div>
                 </div>
		    </div>
        <div id="content_section">
                       <?php
                       
            $news = $this->WebsiteModel->fetch_latest_single_news();
            if($news) {
              foreach($news as $nw) {
            ?>
                <div class="news_updates">
                      <span class="news_update">News Updates</span>
                            <span class="news_date"><em><?php echo $nw->created_date; ?></em></span>
                            <span class="news_des">
                              <a href="#" class="colr"><?php echo (strlen($nw->details) > 20) ? substr($nw->details,0,20).'...' : $nw->details;?></a>
                            </span>
                            <a class="next" href="#"><img src="<?php echo base_url()?>assets/images/newsarrow.jpg"  alt="" /></a>
                </div>
              <?php }} else { ?>
                <div class="news_updates">
                      <span class="news_update">News Updates</span>
                            <span class="news_date"><em></em></span>
                            <span class="news_des">
                              <a href="#" class="colr"></a>
                            </span>
                            <a class="next" href="#"><img src="<?php echo base_url()?>assets/images/newsarrow.jpg" alt="" /></a>
                </div>
              <?php } ?>