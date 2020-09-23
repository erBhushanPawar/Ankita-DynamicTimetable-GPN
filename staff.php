<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin  | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
   <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
<style>
 #th{
border: 3px solid black;
         /* background-color: #5081B4;*/
          background-color: #223E5D ;
          color: white;
         
        }
   .btn-danger {
    background-color: #f5513cc4;
    border-color: #d7392545;
}
.btn {
    border-radius: 20px;
}
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
           
              <li>
                <!-- inner menu: contains the actual data -->
               
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/index.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/index.jpg" class="img-circle" alt="User Image">

                <p>
                  Government Polytechnic Nashik
                </p>
              </li> 
              
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat" style="color: red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/index.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div><br><br>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i>
             <span>Master Timetable</span> </a>   
      </li>
        
           <li>
          <a href="stafftt.php">
            <i class="fa fa-user"></i>
             <span>Staff Timetable</span> </a>   
      </li>  
        <li>
          <a href="addttdemo.php">
          <i class="fa fa-files-o"></i>
            <span>Add Timetable</span> </a>
         </li>

        <li>
           <a href="classroom.php">
          <i class="fa fa-th"></i>
         <span>Classroom</span>  </a>
        </li>
          
        <li>
          <a href="lab.php">
          <i class="fa fa-pie-chart"></i>
           <span>Labs</span></a> 
      </li>
          
        <li>
          <a href="staff.php">
           <i class="glyphicon glyphicon-user"></i>
            <span>Staff</span> </a> 
        </li>
        
        <li>
          <a href="subject.php">
           <i class="app-menu__icon fa fa-files-o"></i>
            <span>Subject</span> </a> 
        </li>

        <li>
          <a href="time.php">
           <i class="glyphicon glyphicon-time"></i>
            <span>Time</span> </a> 
        </li>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>
<main class="app-content" >
      <div class="content-wrapper">
    
    <section class="content-header">
      <h1> Staff </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff</li>
      </ol>
    </section>
    <hr>
    <hr>



  <h3 class="tittle-w3-agileits mb-4" style="font: italic;">List of Staff</h3>
                    <table class="table" style="background-color:#3c8dbc; " border="5" >
                        <thead class="thead-dark" id="th">
                            <tr>
                                <th scope="col">Sr. No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Teacher ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
             
                <a href='addstaff.php' class="btn btn-success" style="float: right;">Add Staff</a>
                <br><br><br>

                <?php 
include "database.php";
$query = mysqli_query($connection,"SELECT * FROM staff");
$n=1;
   if($query) {
    while($row = mysqli_fetch_array($query)){ 
    
        ?>

                            <tr>
                                <th scope="row"><?php echo $n; ?></th>
                                <td><?php echo $row['tname']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['teacherid']; ?></td>
                                <td><a href='deletestaff.php?srno=<?php echo $row['srno']; ?>' class="btn btn-danger">Delete</a></td>
                                
                                <?php $n++; ?>
                            </tr>
                             <?php

}
}
?> 
                </table >
                  
    
 <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
