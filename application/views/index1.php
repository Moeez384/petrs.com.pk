<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Roll No Slip</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/style1.css') ?>">
  </head>
  <body>
<form class="box" action="<?php echo site_url('project_controller/check')?>" method="post">
  <h1>Search Your Result Here</h1>
  <h2 style="backgroun-color:white">Please Enter Your Phone Number with dashes '-'</h2>
  <a href="<?php echo base_url('project_controller/index'); ?>">
  <button type="button" class="btn btn-primary">Search By CNIC</button>
</a>
  <input type="text"  required name="Phone" placeholder="0333-0000000">
  <input type="submit" name="submit" value="Search">
 </form>
</body>
</html>
