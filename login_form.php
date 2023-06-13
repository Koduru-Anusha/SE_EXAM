<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
   } else {
      $error[] = 'Incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

      * {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
      }

      body {
         background-image: url('https://undsgn.com/wp-content/uploads/2018/04/ltotbngnzzu-uai-1600x900.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         font-family: Arial, sans-serif;
      }

      .container {
         min-height: 100vh0vh;
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
         color: #ffffff;
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

      .form-container {
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
      }

      .form-container form {
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
         background: rgba(255, 255, 255, 0.7);
         text-align: center;
         width: 500px;
      }

      .form-container form h3 {
         font-size: 30px;
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
   </style>
</head>

<body>
<h1>Welcome to Exam Alteration Helper ...</h1>
   <div class="form-container">
      <form action="" method="post">
         <h3>Login now...</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Enter your email">
         <input type="password" name="password" required placeholder="Enter your password">
         <input type="submit" name="submit" value="Login Now" class="form-btn">
         <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
      </form>
   </div>

</body>

</html>
