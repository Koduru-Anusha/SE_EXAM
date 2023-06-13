<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Communication</title>

	<style type="text/css">
		.headin
		{
			font-size: 30px;
			text-align: center;
          


			
		}

    @keyframes mymovement {
  from {color: black;}
  to {color:red; }
}

	</style>
	<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 5px;
    }

    .updated {
        background-color: red;
    }
</style>
</head>
<body style="background-image: url('https://static.wixstatic.com/media/c5b0c2_842504a82d1c4ce09ad60c443b602d66~mv2.jpg/v1/fill/w_628,h_420,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/macbook-smaller-black-background.jpg');background-attachment: fixed;
  background-repeat: no-repeat;background-size: 100% 100%;font-family: Avenir Next LT Pro, sans-serif;color: white;font-weight: 100;">





<!--Navigation bar -->

<div>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  font-size: 18px;
}

.navbrar{
    overflow: hidden;

  position: fixed;
  top: 0;
  width: 100%;
}
.navbrar1{
    overflow: hidden;

  position: fixed;

}

</style>

  <ul class="navbrar">
  <li><a class="active" href="#home">Home</a></li>
  <li><a class="active" href="#home" style="background-color: whitesmoke;
  color: black;">Exam time table</a></li>
  <li><a href="http://localhost/nanu/aexamalterationview.php" target="_blank">Exam Alteration</a></li>
  <li><a href="">Feed back</a></li>
  <li><a href="http://localhost/nanu/index.html">Contact us</a></li>
   <li style="float: right;"><a href="#about">Hello Arjun</a></li>
</ul>
</div>
<br>
<br>
</div><br><br>
<div class="headin" style="color: white;">
 Welcome Administrator <span style="color: green;animation: mymovement 1.5s infinite;"> O </span>
</div>
<br>
<br>


<div style="" class="navbr">

    <div style="float: left;margin-left: 300px;"><a href="http://localhost/nanu/createexamtimetable.php"> <img src="createtime.png" style="width: 100px;height: 100px;border-radius: 50%;" > </a></div>
    <div style="float: left;margin-left: 80px;"><a href="http://localhost/nanu/modify.php"><img src="https://cdn-icons-png.flaticon.com/512/3597/3597075.png" style="width: 100px;height: 100px;border-radius: 50%;" > </a></div>
    <div style="float: left;margin-left: 80px;"> <a href="http://localhost/nanu/story5.html"><img src="https://cdn-icons-png.flaticon.com/512/3820/3820148.png" style="width: 100px;height: 100px;border-radius: 50%;" > </a></div>
    <div style="float: left;margin-left: 80px;"> <a href="http://localhost/nanu/cancel.html"><img src="https://cdn.shopify.com/app-store/listing_images/d4657aebc5bd6326ee36817cc6cdeaca/icon/CL6bnbubtPoCEAE=.png" style="width: 100px;height: 100px;border-radius: 50%;" >  </a></div>
    <div style="float: left;margin-left: 80px;"> <a href="http://localhost/nanu/ai.html"><img src="ai.png" style="width: 100px;height: 100px;border-radius: 50%;" > </a></div>
 
</div>

<br><br><br><br><br><br><br>

<div style="margin-left: 250px;">
    <p style="float: left;font-size: 27px;">The easier way to create your exam Time table<br>Upload your excel file and click Import<br>You can view the time table in the website</p>
    <img src="createtime.png" style="width: 180px;height: 180px;float:left ;margin-left: 140px;border-radius: 50%;"> 
</div>


<br><br><br>

<div style="margin-left: 250px;">
    <p style="float: left;font-size: 27px;">An easier way ro modify your time table<br>Update the dates of the exam <br>And notify corresponding teacher automatically</p>
    <img src="https://cdn-icons-png.flaticon.com/512/3597/3597075.png" style="width: 180px;height: 180px;float:left ;margin-left: 140px;"> 
</div>
<br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<div style="margin-left: 250px;">
    <p style="float: left;font-size: 27px;">The easier way to Communicate with teacher <br>Select the teacher and write your message<br>click the submit button message will be sent through mail</p>
    <img src="https://cdn-icons-png.flaticon.com/512/3820/3820148.png" style="width: 180px;height: 180px;float:left ;margin-left: 30px;"> 
</div>



<div style="margin-left: 250px;">
    <p style="float: left;font-size: 27px;">Do you want to Cancel the exam ? <br>enter your reasong and select the exam <br>click submit </p>
    <img src="https://cdn.shopify.com/app-store/listing_images/d4657aebc5bd6326ee36817cc6cdeaca/icon/CL6bnbubtPoCEAE=.png" style="width: 180px;height: 180px;float:left ;margin-left: 30px;border-radius: 50%;"> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>