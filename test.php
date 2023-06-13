
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT venue,day, tname FROM sheet1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo "<div>id: " . $row["venue"]. " - Name: " . $row["day"]. " " . $row["tname"]. "<br><div>";
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>