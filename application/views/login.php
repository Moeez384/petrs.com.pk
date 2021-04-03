<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َBRC Loralia</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style1.css') ?>">
  </head>
  <body>

  <?php
if ($this->session->flashdata('log')) {
  ?>
  <script>
    alert('Invalid Username or Passsword');
  </script>
    <?php
}
?>
<form class="box" action="<?php echo site_url('website_controller/verify')?>" method="post">
  <h1>NK Builders Login</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
</form>
</body>
</html>


