<?php
// Retrieve the input values from the form
$tname = $_POST['tname'];
$examName = $_POST['examName'];
$examDate = $_POST['examDate'];
$reason = $_POST['reason'];

// Store the PDF file
$targetDir = "uploads/";  // Specify the directory to store uploaded files
$targetFile = $targetDir . basename($_FILES['pdfFile']['name']);
move_uploaded_file($_FILES['pdfFile']['tmp_name'], $targetFile);

// Store the input values in the database
// Replace the database connection details with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO alterationdata (tname, ename, date, reason) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$tname, $examName, $examDate, $reason);
$stmt->execute();



// Close the statement and connection
$stmt->close();
$stmt = $conn->prepare("UPDATE sheet1 SET Messages = 'Your request for Alteration is sent to Administrator.' WHERE tname = ?");
if ($stmt === false) {
    // Handle error when prepare() fails
    echo "Error: Failed to prepare the SQL statement.";
} else {
    $stmt->bind_param("s", $tname);
    if ($stmt->execute()) {
        // Statement executed successfully
        echo "Update successful!";
    } else {
        // Handle error when execute() fails
        echo "Error: Failed to execute the SQL statement.";
    }
    $stmt->close();
}




$conn->close();

// Redirect to a success page or perform any other desired action
header("Location: success.html");
exit();
?>
