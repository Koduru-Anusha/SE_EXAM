<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}

// Assuming your database configuration is in config.php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user_db';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Prepare and bind the form input values
    $email = $_POST["email"];
    $exam_venue = $_POST["exam_venue"];
    $faculty_name = $_POST['faculty_name'];
    $mall_practices = $_POST['mall_practices'];
    $observation = $_POST['observation'];

// Prepare the SQL statement to insert the form data into a table
    $sql = "INSERT INTO report_form (email, exam_venue, faculty_name, mall_practices, observation) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $email, $exam_venue, $faculty_name, $mall_practices, $observation);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();

}

// Close the connection
$conn->close();
?>