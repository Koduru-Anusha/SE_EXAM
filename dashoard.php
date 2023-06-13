<!doctype html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main page</title>

  <style type="text/css">


    .timer{
      font-size: 40px;
      background-color: transparent;
      border-radius: 15px;box-shadow: 3px 3px 3px 3px #CCC;
      color: white;
      float: left;
      width: 20%;
      padding: 20px;
      border-radius: 15px;
      animation: mymove 5s infinite;
      
     }
     .ann{
      
       font-size: 30px;
      margin-right: 10px;
      float: right;
      width: 40%;
      text-align: center;
     padding-top: 8px;
     padding-bottom: 8px;
     }

@keyframes mymove {
  from {color: black;}
  to {color:  white;}
}
    
  </style>
</head>
<body style="background-image: url(https://images.pexels.com/photos/2923591/pexels-photo-2923591.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); background-attachment: fixed;
  background-repeat: no-repeat;background-size: 100% 100%;color: black;font-weight: 100;font-family: Graphik,sans-serif">





<!--Navigation bar -->

<div>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: transparent;
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
  background-color: white;
  color: black;
  font-size: 18px;
}
</style >

  <ul>
  <li><a class="active" href="main11.html">Home</a></li>
  <li><a class="active" href="#home">Exam time table</a></li>
  <li><a href="http://localhost/nanu/alterationformteacher.html">Exam Alteration</a></li>
  <li><a href="#contact">Feed back</a></li>
  <li><a href="#about">Contact us</a></li>
   <li style="float: right;"><a href="#about">Login</a></li>
</ul>

</div>
<!--Navigation bar-->
<br><br><br><br>
<br>


<div>
 <?php
// Set up a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the target time from the database
$sql = "SELECT btime FROM sheet1";
$result = mysqli_query($conn, $sql);

// Fetch the target time from the database
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Convert the target time from the database to a Unix timestamp
    $target_time = strtotime(date('Y-m-d ') . $row['btime']);
    
    // Display the timer on the front page
    echo "<div class='timer' style:'border-radius: 15px;'></div>";

    // Define a function to update the timer every second
    echo "<script>
        function updateTimer() {
            // Get the current time
            var current_time = Math.floor(Date.now() / 1000);

            // Calculate the difference between the current time and the target time
            var difference = " . $target_time . " - current_time;

            // Convert the difference into hours, minutes, and seconds
            var hours = Math.floor(difference / 3600);
            var minutes = Math.floor((difference - hours * 3600) / 60);
            var seconds = difference - hours * 3600 - minutes * 60;

            // Format the time and update the timer on the front page
            var formatted_time = ('Time left ')+('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
            document.querySelector('.timer').innerHTML = formatted_time;
        }

        // Call the updateTimer function every second
        setInterval(updateTimer, 1000);
    </script>";
} else {
    echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>

</div>
  
  <div  style="float:right;background-color: trasparent;padding: 15px; border-radius: 15px;font-size: 20px;box-shadow: 3px 3px 3px 3px #CCC;color:white">
  <div style="float:left;" ><img src="img_avatar.png" alt="Avatar" style="border-radius: 50%;size: 20px;" width="200" height="200"></div>
  <div style="float:left;margin-left: 20px;">
    <p>Name : Arjun Sharma</p><br>
    <p>Contact Number : +919963938253</p><br>
    <p>Teacher Id : 121</p><br> </div>
</div>
    
  </div>
  
</div>
<br><br><br><br><br><br><br><br><br><br><br>









<div class="ann" style="background-color:transparent;border-radius: 15px;float: left;box-shadow: 3px 3px 3px 3px #CCC;color:white">


   Latest News & Announcements <br><hr>
    <span style="font-size: 20px;text-align: left;">
      <marquee style="color: tomato;"> Welcome to dashboard </marquee>
  <?php
  // Set up a connection to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "examhelper";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Select the first row and first column from the table
  $sql = "SELECT * FROM sheet1  WHERE tname = 'Shivakumar' LIMIT 1";
  $result = mysqli_query($conn, $sql);

  // Fetch the data from the first row and first column
  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $first_column_data = $row['day'];
      $cd = $row['btime'];
      $dt = $row['date'];
      // Display the data in an H1 tag with blue color style
      echo "<div style='color: red;text-align:center;'>"."You have exam on " . $first_column_data ."( ".$dt." )"." at ".$cd. "</div>";
  } else {
      echo "No data found.";
  }

  // Close the database connection
  mysqli_close($conn);
  ?>



 You have assigned to new exam you can check in calander<br>
   Exam on slot 2 postponed to 23-12-2020 <br>
   Please complete Your past feed back, Thank you <br>
   Important Have to change password multiple logins detected <br>
   <a href="" style="color:red">Click </a> Here to ask help from administrator<br>
</span>
</div>





<br><br><br><br><br><br><br><br>
<div style="background-color: trasparent;margin-left: 30px;float: right;width: 550px;border-radius: 15px;box-shadow: 3px 3px 3px 3px #CCC;color:white">
 <p style="font-size:30px;text-align: center;"> Message Box </p>
 <hr>


 <?php
  // Set up a connection to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "examhelper";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Select the first row and first column from the table
  $sql = "SELECT * FROM sheet1 WHERE tname = 'Arjun sharm' LIMIT 1";
  $result = mysqli_query($conn, $sql);

  // Fetch the data from the first row and first column
  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $first_column_data = $row['Messages'];
     
      // Display the data in an H1 tag with blue color style
      echo "<div style='text-align: center;font-size: 18px;padding:10px'>".$first_column_data."</div>";
  } else {
      echo "No data found.";
  }

  // Close the database connection
  mysqli_close($conn);
  ?>
</div>


</body>
</html>