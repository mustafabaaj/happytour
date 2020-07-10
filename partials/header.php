<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Happy Tour</title>
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="lib/chart-master/Chart.js"></script>
  <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script>
          $( function() {
              $( "#from" ).datepicker();
          } );
          $( function() {
              $( "#to" ).datepicker();
          } );
    </script>
</head>
<?php
  require_once "./config.php";
  session_start();

  if($_SESSION["loggedin"] !== true){
   header("location: ./auth/login.php");
 }
?>
<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <a href="index.php" class="logo"><b>Happy<span>Tour</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <?php

        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ){
        ?>
        <li><a class="logout" href="./auth/logout.php">Logout</a></li>
        <?php }
        else{ ?>
          <li><a class="logout" href="./auth/login.php">Login</a></li>
          <li><a class="logout" href="./auth/register.php">Register</a></li>
          <?php
                } ?>
        </ul>
      </div>
    </header>