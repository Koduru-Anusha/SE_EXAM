<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>
   <style>
      .container {
         display: flex;
         align-items: center;
         justify-content: flex-start;
         flex-direction: column;
         padding: 20px;
         padding-bottom: 60px;
      }

      .navbar {
         display: flex;
         justify-content: space-between;
         align-items: center;
         background: #333;
         padding: 10px 20px;
         color: #fff;
         position: relative;
      }

      .navbar a {
         color: #fff;
         text-decoration: none;
         margin-right: 10px;
      }

      .navbar a:hover {
         color: crimson;
      }

      .navbar .logout-btn {
         position: absolute;
         top: 50%;
         right: 20px;
         transform: translateY(-50%);
      }
   </style>
</head>
<body>
   <div class="navbar">
      <div class="navbar-links">
         <a href="user_page.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="report.php">Report</a>
         <a href="contactus.php">Contact Us</a>
      </div>
      <div class="logout-btn">
         <a href="logout.php" class="btn">Logout</a>
      </div>
   </div>
   <div class="container">
      <embed src="files/Curriculum and Syllabus.pdf" type="application/pdf" width="100%" height=600px"/>
   </div>
</body>
</html>
