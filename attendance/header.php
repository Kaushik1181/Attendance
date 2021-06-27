<?php

include('admin/database_connection.php');

session_start();

if(!isset($_SESSION["teacher_id"]))
{
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Attendance Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>

  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
</head>
<body>

<style>
  .dataTables_wrapper .dt-buttons {
      margin: 0 10px;
    }
</style>

<div class="jumbotron-small text-center" style="margin-bottom:0">
  <h1>Student Attendance System</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>  
    </ul>
  </div>  
</nav>