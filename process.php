
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
<body style="background-image: url('https://th.bing.com/th/id/OIP.pENsrXZ3F7yXMHHRIHS22QHaEK?pid=ImgDet&rs=1');color: white;font-family: 'Montserrat', sans-serif;">





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
<br>
<div class="headin" style="color: white;">
Welcome Admistrator
</div>
<br>
<br>

<div>



<?php

// database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

// create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve input values from a form
$name = $_POST['name']; //date
$ename = $_POST['ename']; //exam name 

$newname = $_POST['newname']; //new date 
$btime = $_POST['btime']; //nbtime
$etime = $_POST['etime']; //netime


// prepare and execute a SQL statement to update the value
$sql = "UPDATE sheet1 SET date = '$newname', btime = '$btime', etime = '$etime' , messages = 'Your exam on $name is rescheduled to $newname Please check' WHERE date = '$name' and ename = '$ename'";

$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    echo "<div style='border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    width: 200px;'>";
    echo "Value updated successfully<br>";

    // prepare and execute a SQL statement to select the tname column based on the updated date
    $sql_select = "SELECT tname FROM sheet1 WHERE date = '$newname' or date = ''";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
        echo "<p style = 'font-family: 'Montserrat', sans-serif;'>The Available Teachers  for $newname:<p>";
        while ($row = $result->fetch_assoc()) {
            echo "<p style ='color:red;font-family: 'Montserrat', sans-serif;'>".$row['tname'] . "</p> ";
        }

        echo "</div>";
    } else {
        echo "No TNames found for $newname";
    }
} else {
    echo "Error updating value: " . $conn->error;
}

// close the connection to the database
$conn->close();

?>

</div>

</body>
</html>








