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
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
      }

      .container .content {
         text-align: center;
      }

      .container .content h3 {
         font-size: 30px;
         color: #333;
      }

      .container .content h3 span {
         background: crimson;
         color: #fff;
         border-radius: 5px;
         padding: 0 15px;
      }

      .container .content h1 {
         font-size: 50px;
         color: #333;
      }

      .container .content h1 span {
         color: crimson;
      }

      .container .content p {
         font-size: 25px;
         margin-bottom: 20px;
      }

      .container .content .btn {
         display: inline-block;
         padding: 10px 30px;
         font-size: 20px;
         background: #333;
         color: #fff;
         margin: 0 5px;
         text-transform: capitalize;
      }

      .container .content .btn:hover {
         background: crimson;
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

      .box {
         background-color: #fff;
         border: 1px solid #333;
         padding: 20px;
         margin-top: 20px;
         border-radius: 20px;
         box-shadow: 0 10px 10px rgba(26, 26, 26, 0.1);
      }

      form {
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
         background: #fff;
         text-align: left;
         width: 500px;
      }

      form h3 {
         font-size: 30px;
         text-transform: uppercase;
         margin-bottom: 10px;
         color: #333;
      }

      form label {
         display: block;
         margin-bottom: 5px;
         font-size: 18px;
         color: #333;
         width: 200px;
         float: left;
         clear: left;
      }

      form input,
      form select,
      form textarea {
         width: 300px;
         padding: 10px 15px;
         font-size: 17px;
         margin-bottom: 8px;
         background: #eee;
         border-radius: 10px;
         border: 1px solid #ccc;
         transition: border-color 0.3s ease;
      }

      form select option {
         background: #fff;
      }

      form .form-btn {
         background: #fbd0d9;
         color: crimson;
         text-transform: capitalize;
         font-size: 20px;
         cursor: pointer;
         border: 1px solid #ccc;
         padding: 10px 15px;
         transition: background-color 0.3s ease, color 0.3s ease;
      }

      form .form-btn:hover {
         background: crimson;
         color: #fff;
      }

      form p {
         margin-top: 10px;
         font-size: 20px;
         color: #333;
      }

      form p a {
         color: crimson;
      }

      form .error-msg {
         margin: 10px 0;
         display: block;
         background: crimson;
         color: #fff;
         border-radius: 5px;
         font-size: 20px;
         padding: 10px;
      }

      /* Additional CSS Effects */

      form input:focus,
      form select:focus,
      form textarea:focus {
         border-color: crimson;
      }

      form .form-btn:hover {
         background: crimson;
         color: #fff;
         transform: scale(1.05);
      }

      /* Adjust radio buttons */
      form input[type="radio"] {
         transform: translateY(27px);
      }
   </style>
</head>
<body>
   <div class="navbar">
      <div class="navbar-left">
         <a href="user_page.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="report.php">Report</a>
         <a href="#">Contact Us</a>
      </div>
      <a href="logout.php" class="btn">Logout</a>
   </div>
   <div class="container">
      <div class="content">
         <h3>hi, <span>user</span></h3>
         <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
         <div class="box">
            <h3>Please give your Report about the Exam ...</h3>
            <br />
            <form action="process_report.php" method="POST" enctype="multipart/form-data">
               <label for="email">Email:</label>
               <br>
               <input type="email" name="email" id="email" placeholder="Email" required>
               <br><br>
               <label for="exam_venue">Exam Venue:</label>
               <br>
               <input type="text" name="exam_venue" id="exam_venue" placeholder="Exam Venue" required>
               <br><br>
               <label for="faculty_name">Name of the Faculty:</label>
               <br>
               <input type="text" name="faculty_name" id="faculty_name" placeholder="Name of the Faculty" required>
               <br><br>
               <label for="mall_practices">Any malpractices ?</label>
               <br>
               <input type="radio" name="mall_practices" id="mall_practices_yes" value="yes" required>
               <label for="mall_practices_yes">Yes</label>
               <input type="radio" name="mall_practices" id="mall_practices_no" value="no" required>
               <label for="mall_practices_no">No</label>
               <br><br>
               <label for="attachments">Add attachments:</label>
               <br>
               <input type="file" name="attachments" id="attachments" accept=".jpg,.pdf" required>
               <br><br>
               <label for="observation">Observation:</label>
               <br>
               <textarea name="observation" id="observation" placeholder="Observation" rows="4" required></textarea>
               <br><br>
               <input type="submit" value="Submit" class="form-btn">
            </form>
         </div>
      </div>
   </div>
</body>
</html>