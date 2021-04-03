<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  
  <meta charset="utf-8">
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
margin-top: 10px
}
.main-heading {
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

 <h1 class="main-heading"> QUETTA CENTER </h1>
                  <div class="form">
                    <form class="box" action="<?php echo site_url('RollNoSlip/quettaResult')?>" method="post">
<ul class="inquiryform">

<a href="<?php echo base_url('RollNoSlip/SearchByPhoneNo'); ?>">
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
<div class="pregrap">
       <h3 style="font-size: 20px;margin-bottom:15px"> Applicants may please note that:</h3>
        <table class="inner_class2" >
                 <tr>
                  <td>1.</td>
                  <td>Report test center on Time</td>
                  </tr>
                  <tr>
                      <td>2. </td>
                      <td>Following are strictly prohibited</td>
                  </tr>
          </table>
         <!--  <img src="<?php echo base_url(); ?>assets/images/not_allowed.png" class="not_allowed"> -->
          <h5>Penalty: Cancellation of Paper</h5>
          <table class="inner_class2" >
                 <tr>
                  <td>3.</td>
                  <td>Candidate must bring this printted Roll Number Slip (RNS) to the
                  test center along with origonal CNIC/B-FORM . <br>Failing to bring any of these,
                  candidate shall not allowed to appear for the test.</td>
                  </tr>
                  <tr>
                      <td>4. </td>
                      <td>Please bring along:</td>
                      </tr>
                  <tr>
                      <td>A. </td>
                      <td><b>A clip board</b></td>
                      </tr>
                  <tr>
                      <td>B.</td>
                  <td><b>Black/blue Ball point</b></td>
                  </tr>
                  <tr>
                  <td>5.</td>
                  <td>Mobile Collection facility Available at Center for Rs 50</td>
                  </tr>
                  <tr>
                      <td>6. </td>
                      <td>Candidate will be allowed to leave the test center after 45 minutes from comencement of test</td>
                      </tr>
                  <tr>
                      <td>7. </td>
                      <td>Cancellation of Paper /confiscation of Cell Phone / Legal Action</td>
                      </tr>
                  <tr>
                      <td>8.</td>
                  <td>PHYSICAL CHECKING CAN BE DONE AT ANY TIME DURING TEST</td>
                  </tr>
                  <tr>
                      <td>9. </td>
                      <td>Biometric will be done while entering the test center</td>
                      </tr>
             </table>
     <!--   <ul>
<li>No hardcopy of application or copies of documents are required to be forwarded to PETRS.</li>
<li>The printed online application should be retained by the applicants for their own record.</li>
<li>Do not send Bank Challan/ Treasury Receipt to BPSC, It should be preserved in save custody by applicant and has to be produced at time of appearing in the Exam.</li>
<li>Submitting online applications without having required Qualification, Experience, Gender, Religion, Local/Domicile etc or submitting fake/bogus online applications may cause serious difficulty for applicant in future.</li>

</ul> -->
<!-- <p>or any technical assistance regarding applying online, contact on the number <b>(0302-3890590)</b> during office hours from Monday to Friday. -->
      </div>
</div>

<div class="clear"></div>
</div>
</body>
</html>
