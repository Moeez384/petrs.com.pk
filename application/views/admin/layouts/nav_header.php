<!DOCTYPE html>
<html lang="en">

<head>

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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">


    <!--data table-->
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/toastr/toastr.min.css" rel="stylesheet">
  <!-- <link href="<?= base_url(); ?>assets/css/style.scss" rel="stylesheet"> -->
  <style>
     .collapse-item{
font-size: 15px;
    }
 
    @media screen and (max-width: 500px) {
  .collapse-item{
font-size: 9px;
    }
    .txt{
      font-size: 9px;
    }

}

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
   
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #05386B">



        <div class="sidebar-heading-text text-white text-center mt-4 mb-4" style="font-size: 20px; font-weight: bold"><br>PETRS</div>
      <!-- </a>  -->

      <!-- Divider -->
<hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="students" class="nav-link" href="<?php echo base_url();?>admin/Advertisement">
         <i class="fas fa-users text-light" aria-hidden="true"></i>
          <span>Advertisments</span></a>
      </li>

<hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="students" class="nav-link" href="<?php echo base_url();?>admin/Projects">
         <i class="fas fa-users text-light" aria-hidden="true"></i>
          <span>Projects</span></a>
      </li>

<hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="students" class="nav-link" href="<?php echo base_url();?>admin/Posts">
         <i class="fas fa-users text-light" aria-hidden="true"></i>
          <span>Project Posts</span></a>
      </li>

<hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="students" class="nav-link" href="<?php echo base_url();?>admin/News">
         <i class="fas fa-chalkboard-teacher text-light"></i>
          <span>News</span></a>
      </li>
 
<hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Divisions">
         <i class="fa fa-building text-light" aria-hidden="true"></i>
          <span>Divisions</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/CeoMessage">
         <i class="fa fa-book text-light" aria-hidden="true"></i>
          <span>CEO Message</span></a>
      </li>
        
   <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Associates">
        <i class="fas fa-chalkboard text-light"></i>
          <span>Associates</span></a>
      </li>
      
         <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Users">
        <i class="fas fa-list text-light"></i>
          <span>Users</span></a>
      </li>
      
         <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Services">
        <i class="fa fa-hourglass" aria-hidden="true"></i>
          <span>Services</span></a>
      </li>

   <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/CSR">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">CSR</span></a>
      </li>

  <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/AboutUs">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">About Us</span></a>
      </li> 

  <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Results">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Results</span></a>
      </li>

    <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/Faqs">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">FAQ'S</span></a>
      </li>     

 <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/UserQueries">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">User's Queries</span></a>
      </li>


 <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userAdmin">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Add User</span></a>
      </li>

      <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userAdmin/addProjects">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Associate Project</span></a>
      </li>

      

      <b><hr class="sidebar-divider my-0"></b>


      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url('admin/userAdmin/allUsers');?>">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">All Users</span></a>
      </li>

      <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userProjects">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Add Projects</span></a>
      </li>
      <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userProjects/allProjects">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">All Projects</span></a>
      </li>
      <b><hr class="sidebar-divider my-0"></b>

      <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userAdmin/assignedProjects">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Assigned Projects</span></a>
      </li>
      <b><hr class="sidebar-divider my-0"></b>

       <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userAdmin/addpost">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">Add Job Posts</span></a>
      </li>
   

    <b><hr class="sidebar-divider my-0"></b>

       <li class="nav-item mt-2">
        <a id="dept" class="nav-link" href="<?php echo base_url();?>admin/userProjects/alljobposts">
        <i class="fas fa-sign-out-alt text-light"></i>
          <span style="font-size: 16px">View Job Posts</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color: whitesmoke">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-default topbar mb-4 static-top shadow">
<div class="input-group md-form form-sm form-1 pl-0 ml-2" style="margin-right: 5%">
  <div class="input-group-prepend">
    <span class="input-group-text rounded-0" id="basic-text1" style="border-right: 12px; border-left: 12px; border-top: 12px;" hidden><i class="fas fa-search text-white"
        aria-hidden="true" hidden></i></span>
  </div>
  <input class="form-control my-0 py-1 rounded-0" type="text" id="theSearch" placeholder="Search" aria-label="Search" style="border-right: 12px; border-left: 12px; border-top: 12px;" hidden>
</div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

       <li class="nav-item dropdown no-arrow">
 
       </li>

          <li class="nav-item dropdown no-arrow">
        <a id="dept" href="<?php echo base_url();?>admin/Signin/sign_out" class="nav-link dropdown-toggle" style="color: #05386B; font-size: 15px; font-weight: bold">
&nbsp;Logout&nbsp;</a>
      </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
