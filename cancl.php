<?php
// Retrieve the name from the form
$name = $_POST['name'];

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the delete query
$sql = "DELETE FROM sheet1 WHERE ename = '$name'";
if ($conn->query($sql) === TRUE) {
    echo "Row deleted successfully";
} else {
    echo "Error deleting row: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
