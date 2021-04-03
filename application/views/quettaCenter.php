<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">-->
<head>
  
  <title>Roll No Slip</title>
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
    .form {
  width: 600px;
  float: unset;
  padding-top: 20px;
  text-align: center;
}
.search_course {
  width: 600px !important;
}
.apply_now {
  width: 103px;
  height: 31px;
  background-color: #c41100;
  margin: auto;
  padding: 0 10px;
  line-height: 31px;
  border-radius: 55px;
  color: #fff;
  font-size: 16px;
}
ul.inquiryform li {
  padding-bottom: 1px;
}
.btn-primary{
border: 0px;
  color: #fff;
  background: #01411c;
  padding: 7px 25px;
  border-radius: 56px;
  margin-bottom: 13px;
}
.main-heading {
  text-align: center;
  border-bottom: 2px solid #01411c;
}
ul.inquiryform{
margin-top: 10px;
}
  </style>
</head>
<body>
  <div id="content_section">

      <div class="contentblock">
          <div class="search_course pz-center">
              <div class="box">
                <h5 class="main-heading">Balochistan Residentional College Loralai (B R C)
Entry Test 2021 class VII</h5>

 <h1 class="main-heading"> QUETTA CENTER Result</h1>
                  <div class="form">
                    <form class="box" action="<?php echo site_url('QuettaResult/yourResult')?>" method="post">
<ul class="inquiryform">

<a href="<?php echo base_url('QuettaResult/SearchByPhoneNo'); ?>">
<button type="button" class="btn btn-primary">Search By Phone Number</button>
</a>

<h5> Enter Your CNIC Number Without Dashes </h5>
<li><input type="text" required name="cnic" placeholder="0000000000000"></li>
<br>
<!-- <h4>Please Enter Your CNIC with dashes '-'</h4> -->
<div>
<input class="apply_now" type="submit" name="submit" value="Search" >
</div>
</ul>
</form>
</div>
</div>
<div class="clear"></div>


</div>
<!--   <?php
if ($this->session->flashdata('Not_Exit')) {
  ?>
  <div align="center" style="color: #FFF" class="btn-danger">
    <?php
    echo $this->session->flashdata('Not_Exit');
    ?>
    </div>
    <?php
}
?> -->
    <?php
if ($this->session->flashdata('Not_Exit')) {
  ?>
  <script>
    alert('You Have Entered An Invalid CNIC Number');
  </script>
    <?php
}
?>

</div>
</div>

<div class="clear"></div>

</body>
</html>
