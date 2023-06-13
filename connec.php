<?php $conn = mysqli_connect("localhost", "root", "", "examhelper"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		.box{
			padding-left: 10px;
			border-radius: 20px;
 			 border: 2px solid white;
 			 font-size: 25px;
 			 padding: 40px;
 			  width: 60%;
 			  margin-top: 20px;
 			  margin-left: 10px;

		}
			.box1{
			padding-left: 10px;
			border-radius: 20px;
 			 border: 2px solid white;
 			 font-size: 25px;
 			 padding: 40px;
 			  width: 60%;
 			  margin-top: 20px;
 			  margin-left: 10px;
 			  animation: mymove 7s infinite;

		}

		@keyframes mymove {
  from {border: 2px solid white;}
  to {border: 2px solid red; box-shadow: 10px 10px 30px grey;}
}
@keyframes mymov {
  from {border: 2px solid white;}
  to {border: 2px solid blue; }
}
	</style>

</head>
<body style="background-image: url('https://th.bing.com/th/id/OIP.pENsrXZ3F7yXMHHRIHS22QHaEK?pid=ImgDet&rs=1');;font-family: Avenir Next LT Pro, sans-serif;color: white;font-weight: 100;">
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
</style>

  <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a class="active" href="#home" style="background-color: whitesmoke;
  color: black;">Exam time table</a></li>
  <li><a href="#news">Exam Alteration</a></li>
  <li><a href="#contact">Feed back</a></li>
  <li><a href="#about">Contact us</a></li>
   <li style="float: right;"><a href="#about">Login</a></li>
</ul>

</div>
<br>


<?php
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM sheet1 where tname ='shalini' ");
			foreach($rows as $row) :
			?>

		<div class="box1">
	Date  : <?php echo $row["date"]; ?> <br>
	Day   : <?php echo $row["day"]; ?> <br>

	Starting Time  :<?php echo $row["btime"]; ?> <br>
	Ending Time : <?php echo $row["etime"]; ?><br>
	Exam name   : <?php echo $row["ename"]; ?><br>
	Type 				: <?php echo $row["type"]; ?><br>
	Venue :<?php echo $row["venue"]; ?> <br>
</div>

			
			<?php endforeach; ?>





</body>
</html>