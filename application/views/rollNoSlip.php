<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETRS</title>
<!-- Stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
<!-- Javascript -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/ddsmoothmenu.js" type="text/javascript"></script>
<script src="js/contentslider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/DIN_500.font.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<style type="text/css">
body {
    background: #fff;
    font-size: 13px;
    color: #000000;
}
.inner_class{
  padding: 20px 0px;
    width: 100%;
    margin: 0px 0px;
}
.inner_class td, .inner_class3 td{
   border: 0px solid !important;
    font-size: 16px;
    font-weight: 800;
}
.depertment_name{
    position: relative;
    display: block;

    margin: auto;
    white-space: break-spaces;
    font-size: 35px;
    margin-top: 10px;
    margin-bottom: 8px;
}
.post_name{
     position: relative;
    display: block;
    white-space: break-spaces;
    font-size: 17px;
    text-decoration: underline;
    margin-bottom: 12px;
}
.rollno_slip{
    background: #04431f;
    color: #fff;
    padding: 1px 17px 6px;
}
.rollno_slip_h2{
  margin-top: 17px;
    text-align: center;
    color: #2b2b2b;
    font-weight: 600;
    font-size: 28px;
    text-decoration: underline;
    word-spacing: 1px;
    line-height: 31px;
    margin-bottom: 15px !important;
}
.pz-heading h4{
    text-align: center;
    font-size: 22px;

    color: #000000;
    margin-top: 4px;
    margin-bottom: 0px;
}
.coursename img{
    max-width: 50%;
    margin-top: 6px;
}
.inner_class3{
        margin-top: 80px !important;
}
.inner_class3 td:nth-child(1){
    text-align:left !important;
}
.inner_class3 td{
    text-align:center !important;
    padding: 0px !important;
    width:100%;

}
.inner_class2{
    border-collapse: collapse;
    margin:5px 0px;
}
.inner_class2 td{
border:0px solid !important;
font-size:15px;
}
.inner_class2 td:nth-child(2) {
    width:100%;
}
.roll_no{
    color: #fff !important;
    background: #c41100;
    padding: 0px 10px;
    font-weight: 800;
}
.inner_class4{
    width:100%;
    margin-top: 20px;
    margin-bottom: 15px;
}
.inner_class4 th, .inner_class4 td{
    border: 0px solid !important;
}
.inner_class4 th{
    background: #04431f;
    color: #fff;
}

.pz-image {
    width: 130px;
    height: 150px;
    position: absolute;
    top: -4px;
    left: -109px;
    border-radius: 6px;
    box-shadow: 0px 0px 4px 0px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  /*width: 50%;*/
}
.rtable {

  vertical-align: top;
  max-width: 100%;
  overflow-x: auto;
  white-space: nowrap;
  border-collapse: collapse;
  border-spacing: 0;
      margin-top: 20px;
    width:100%;
}
.pz-rtable {
 width:auto;
  display: inline-block;

}
.rtable,
.rtable--flip tbody {

  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 12px;
  text-align:center !important;
  text-align: left;
  text-transform: uppercase;

}
.colr {
    color: #272727 !important;
}
.main-table th,
.main-table td {
  padding: 5px 12px;
  border: 2px solid #04431f;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.rtable--flip td,
.rtable--flip th {
  display: block;
}
*{
  box-sizing: border-box;
}

.pz-header{
  content: "";
  clear: both;
  display: table;
}
.abc{
  display: block;
  width: 100px;
  margin-left: -10px;
  /*margin-left: auto;
  margin-right: auto;*/
}
.paginated{
  margin-top: 5px
}
.copyright{
  margin:4px;
  text-align: center;
}
.pz-logo{
    float: left;
    width: 12%;
    margin: 5px 0px;

}
body{
  margin-top: -0px;
}
.pz-heading{
  float: left;
  width:88%;
}
.pz-rollno{
  margin:0px;
  font-size: 40px;
}
.inner_class4 th, td{
  font-size: 15px;
}
.inner_class4 th{
padding: 10px 0px;
}
.inner_class4 td{
    padding: 6px 0px;
}
#wrapper_sec{
    padding: 8px 4px
} 
#wrapper_sec #content_section{
    border: 2px solid #01411c;
    outline-style: solid;
    outline-color: #01411c;
    outline-offset: 3px;
    outline-width: thick;
}
.row {
    content: "";
    clear: both;
    display: table;
    position: relative;
    width: 100%;
}
.left-column{
    float:left;
    width:80%;
}
.right-column{
    float:left;
    width:20%;
    padding: 7px 0px;
}
.row table {
    width: 100%;
    text-align: left;
    border-spacing: 0px !important;
    margin: 7px 0px;
    border-collapse: collapse;
    border-radius: 4px;
    overflow:hidden;
}
.pz-user-img{
  width: 119px;
    height: 137px;
    border: 2px solid #01411c;
    border-radius: 13px;
    display: flex;
    align-items: center;
    padding: 10px;
    margin: auto;
}
.pz-user-img p{
    font-size: 13px;
    white-space: pre-wrap;
    text-decoration: underline;
}
.footer-img{
    max-width:100%;
}
.pz-main{
    padding:5px 15px;
}
.inner_class4 th {
  background:#fff;
  color:black;
}
.inner_class4 {
    font-size: 15px;
    border-left: 2px;
    /* border-bottom: 0px solid !important; */
    background: #fff;
    color: black;
    border-collapse:collapse;
    
}
.inner_class4 td, .inner_class4 th {
   border:2px solid #01411c !important;
   padding: 10px 0px;
}
</style>

</head>
<body>
<div id="bg">
<!-- Wapper Sec -->
  <div id="wrapper_sec">
     <!-- masterhead -->

    <!-- Content Seciton -->
          <div id="content_section">
            <!-- News Updates -->

        <!-- Col1 -->
                  <div class="pz-main">
                    <div class="pz-header">
                    <div class="pz-logo">
 <img class="abc" src="<?php echo base_url(); ?>assets/images/logo-new.png" class="not_allowed">
 </div>
 <div class="pz-heading">
    <h2 class="rollno_slip_h2">PROMINENT   EDUCATIONAL    TESTING   & 
RECRUITMENT   SERVICES</h2>
<h4>BALOCHISTAN   RESIDENTIAL   COLLEGE   LORALAI     (BRC - 2021)</h4>
 </div>
 </div>
   <table class="rtable paginated">

  <thead>

    <tr>

      <th class="coursename colr">
          <div class="row">
          <div class="left-column">
        <table class="main-table">
              <tr>
                  <td style="width: 44%;">Roll Number: <span style="font-size:24px;margin-left:30px;"><?php echo $singleProduct->Roll_No ; ?></span></td>

                  <td style="width: 50%;">class: 7th</td>
              </tr>
              </table>
               <table class="main-table">
              <tr>
                  <td>NAME</th>
                  <td><?php echo $singleProduct->Name ?></th>
             </tr>
             <tr>
                  <td>FATHER NAME</th>
                  <td><?php echo $singleProduct->F_Name; ?></th>
              </tr>
               <tr>
                  <td>CNIC / B.FORM</th>
                  <td><?php echo $singleProduct->CNIC; ?></th>
              </tr>
              </table>
              </div>
              <div class="right-column">
                  <div class="pz-user-img">
                      <p>PASTE YOUR RECENT PHOTOGRAPH </p>
                  </div>
              </div>
              </div>
       <!--   <span class="post_name">class VII</span>
          <h3>Roll Number</h3>
          <h1 class="pz-rollno"><span class="roll_no">/*<?php echo $singleProduct->Roll_No; ?>*/</span></h1>-->
          <table class="inner_class4">

              <tr>
                  <th>Biometric Registration Time <br><br><?php echo $singleProduct->Biomatric_Time; ?></th>
                  <th>Test Date <br><br><?php echo $singleProduct->TestDate; ?></th>
                  <th>Test Day <br><br><?php echo $singleProduct->TestDay; ?></th>
                  <th>Test Time <br><br><?php echo $singleProduct->TestTime; ?></th>
                  </tr>
                  <!--<tr>
                  <td>08:00 AM</td>
                  <td>24-02-2021</td>
                  <td>Wednesday</td>
                  <td>12:00PM</td>
                  </tr>-->
                  <tr>
                      <td>TEST VENUE</td>
                      <td colspan="4" style="white-space: pre-line;"><?php echo $singleProduct->Venue; ?><!-- DARBAR   MARRIAGE   HALL   NEAR   RAILWAY   STATION 
                        ZARGHOON   ROAD   QUETTA. -->
                    </td>
                  </tr>

          </table>
</th>
  </thead>
  <tbody  id="myTable">
   
   
<table>
    <tr>
        <td><img class="footer-img" src="<?php echo base_url(); ?>assets/images/slipfooter-min.png" ></td>
    </tr>
</table>
  </tbody>
</table>  
                        <!-- col1 ends -->
                    </div>

                <div class="clear"></div>

    <div class="clear"></div>
  </div>
</div>
</div>
</body>
</html>
