<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETRS</title>
<!-- Stylesheet -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/datatables/datatables.min.css"/>-->
  <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <!--data table-->
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/toastr/toastr.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ddsmoothmenu.css" />

</head>
<body>
<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
			<div id="masterhead">
				<!-- Logo -->
              <div class="logo"><a hrhref="<?php echo base_url()?>website/index/home"><?php echo base_url();?>assets/images/logo-2.png" alt="" /></a>
                  </div>
                	<!-- masterhead Right Section -->
						<div class="topright_sec">
                    		<!-- top navigation -->
                    			<div class="topnavigation">
                               		<ul>
                                  		<li class="first">&nbsp;</li>
                                    	<li><a href="news.html">Top News</a></li>
                                    	<li><a href="#">Events</a></li>
                                        <li><a href="blog.html">Blog</a></li>
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
                                            <li style="float:right; margin-top:20px;"><a class="pz-search" href="<?php echo base_url()?>website/Signin">Apply Online</a></li>
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
      <li class="first"><a class="selected" href="<?php echo base_url()?>website/index">Home</a></li>
      <li><a href="<?php echo base_url()?>website/index/aboutus">About Us</a>  
          <ul>
            <li><a href="<?php echo base_url()?>website/index/ceo">CEO Message</a></li>
          </ul>
       </li>
       <li><a href="<?php echo base_url()?>website/Results">Results</a></li>
       <li><a href="<?php echo base_url()?>website/Services">Tests & Products</a> </li>
        <li><a href="<?php echo base_url()?>website/Services">Services</a> </li>
        <li><a href="<?php echo base_url()?>website/Divisions">Divisions</a></li>
        <li><a href="<?php echo base_url()?>website/Associates">Associates</a></li>
        <li><a href="<?php echo base_url()?>website/CSR">CSR</a></li>
        <li><a href="<?php echo base_url()?>website/FAQS">FAQs</a></li> 
        <li><a href="<?php echo base_url()?>website/Contact" class="last">Contact Us</a></li>
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