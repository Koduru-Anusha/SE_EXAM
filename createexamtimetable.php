<?php $conn = mysqli_connect("localhost", "root", "", "examhelper"); ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time table </title>

	<style type="text/css">
		.headin
		{
			font-size: 30px;
			text-align: center;
			
		}
tr:hover {background-color: #D6EEEE;font-size : 20px;color:black}
tr {
font-size : 18px;
background-color: white;
color:black;
}
	</style>
</head>
<body style="color: white;    font-family: Graphik,sans-serif;background-image: url('https://images.pexels.com/photos/2034373/pexels-photo-2034373.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">





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
  <li><a class="active" href="main.html">Home</a></li>
  <li><a class="active" href="#home" style="background-color: whitesmoke;
  color: black;">Exam time table</a></li>
  <li><a href="http://localhost/nanu/aexamalterationview.php">Exam Alteration</a></li>
  <li><a href="#contact">Feed back</a></li>
  <li><a href="#about">Contact us</a></li>
   <li style="float: right;"><a href="#about">Login</a></li>
</ul>
<br>
<div class="headin" style="color: white;font-size:40px">
Welcome Administrator
</div>
<br><br><br>

<!--taking file input>-->
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 22px;
  padding: 8px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<div>
	<form class="" action="" method="post" enctype="multipart/form-data">
	<input style="float: left; padding: 12px; border-radius: 7px; background-color: #6A5ACD;" type="file" name="excel" required value="">

			<button type="submit" name="import" class="button" style="float:right;" >Import</button>
		</form>
</div>
<!--end taking file input>-->


<br>

<br><br><br>
		<table border = 1 style = 'width : 100%;text-align:center;border-collapse: collapse;font-family: 'Montserrat', sans-serif; box-shadow: 20px 20px 50px grey;background-color:grey'>
			<tr style = 'background-color: coral;' >
				<th style = 'padding: 18px;'>Date</th>
				<th>Day</th>
				<th>Teacher name</th>
				<th>Venue</th>
				<th>Exam beginnig time</th>
				<th>Exam ending time</th>
				<th>Exam name</th>
				<th>Exam Type </th>

			
			</tr>
			<?php
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM sheet1");
			foreach($rows as $row) :
			?>
			<tr>
				
				<td style = 'padding: 10px; '> <?php echo $row["date"]; ?> </td>
				<td> <?php echo $row["day"]; ?> </td>
				<td> <?php echo $row["tname"]; ?> </td>
				<td> <?php echo $row["venue"]; ?> </td>
				<td> <?php echo $row["btime"]; ?> </td>
				<td> <?php echo $row["etime"]; ?> </td>
				<td> <?php echo $row["ename"]; ?> </td>
				<td> <?php echo $row["type"]; ?> </td>
			</tr>
			<?php endforeach; ?>
		</table>

<!-- php code -->

<?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$date= $row[0];
				$day=$row[1];
				$tname = $row[2];
				$venue = $row[3];
				$btime = $row[4];
				$etime = $row[5];
				$ename = $row[6];
				$type = $row[7];
				$duty = $row[8];
				$row1 = $row[9];
				$row2 = $row[10];
				
				
				mysqli_query($conn, "INSERT INTO sheet1 VALUES('$date','$day','$tname','$venue','$btime','$etime','$ename','$type','$duty','$row1','$row2')");
			}

	echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
		}
		?>

</body>
</html>