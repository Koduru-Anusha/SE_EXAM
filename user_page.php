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

      .form-container {
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
         background: #eee;
      }

      .form-container form {
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
         background: #fff;
         text-align: center;
         width: 500px;
      }

      .form-container form h3 {
         font-size: 30px;
         text-transform: uppercase;
         margin-bottom: 10px;
         color: #333;
      }

      .form-container form input,
      .form-container form select {
         width: 100%;
         padding: 10px 15px;
         font-size: 17px;
         margin: 8px 0;
         background: #eee;
         border-radius: 5px;
      }

      .form-container form select option {
         background: #fff;
      }

      .form-container form .form-btn {
         background: #fbd0d9;
         color: crimson;
         text-transform: capitalize;
         font-size: 20px;
         cursor: pointer;
      }

      .form-container form .form-btn:hover {
         background: crimson;
         color: #fff;
      }

      .form-container form p {
         margin-top: 10px;
         font-size: 20px;
         color: #333;
      }

      .form-container form p a {
         color: crimson;
      }

      .form-container form .error-msg {
         margin: 10px 0;
         display: block;
         background: crimson;
         color: #fff;
         border-radius: 5px;
         font-size: 20px;
         padding: 10px;
      }

      .box-container {
         display: flex;
         justify-content: space-between;
         align-items: flex-start;;
         margin-top: 20px;
         width: 90%;
      }

      .box {
         display: flex;
         justify-content: center;
         align-items: center;
         margin: 20px 40px;
         padding: 90px;
         background: #eee;
         border: 2px solid #333;
         border-radius: 5px;
         flex: 1;
         transition: all 0.3s ease;
         position: relative;
      }
      .box.right-box {
   height: 200px; /* Adjust the height as desired */
}

      .box:before {
         content: "";
         position: absolute;
         top: -10px;
         left: -10px;
         right: -10px;
         bottom: -10px;
         border-radius: 5px;
         box-shadow: 0 0 20px 5px crimson;
         opacity: 0;
         z-index: -1;
         animation: glowing 1.5s infinite;
      }

      @keyframes glowing {
         0% {
            opacity: 0;
         }
         50% {
            opacity: 1;
         }
         100% {
            opacity: 0;
         }
      }

      .box:hover {
         transform: scale(1.1);
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }

      .box-content {
         text-align: center;
         margin: 10px 0;
      }

      .box-content h2  a {
         font-size: 30px;
         color: red;
         transition: all 0.3s ease;
      }

      .box-content p a:hover {
         color:black;
         font-size: 25px;
         font-weight: bold;
         font-style: italic;
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
      <div class="content">
         <h3>Hi, <span>Supervisor</span></h3>
         <h1>Welcome <span><?php echo $_SESSION['user_name']; ?></span></h1>
      </div>

      <div class="box-container">
         <div class="box">
            <div class="box-content">
               <h2><a href="exam_policies.php">click here </a>to know about exam policies</h2>
               <h2><a href="curriculum.php">click here </a>to know about the curriculum</h2>
            </div>
         </div>

         <div class="box right-box">
            <div class="box-content">
               <h2><a href="about.php">click here </a>to know more about us </h2>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
