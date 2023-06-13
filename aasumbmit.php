<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examhelper";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Assuming you have a database connection established

    // Get the input values
    $oldTeacherName = $_POST['oldTeacherName'];
    $newTeacherName = $_POST['newTeacherName'];
    $examDate = $_POST['examDate'];
    $examName = $_POST['examName'];

    // Prepare and execute the SQL query to update the teacher name
    $stmt = $pdo->prepare("UPDATE sheet1 SET tname = :newTeacherName, Messages = 'Congratulations! Your exam duty has been Altered' WHERE tname = :oldTeacherName AND date = :examDate AND ename = :examName");
    $stmt->execute([
        'newTeacherName' => $newTeacherName,
        'oldTeacherName' => $oldTeacherName,
        'examDate' => $examDate,
        'examName' => $examName
    ]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        echo "Teacher name updated successfully.";
    } else {
        echo "No records found matching the provided criteria.";
    }

    // Prepare and execute the SQL query to delete the record
    $stmt = $pdo->prepare("DELETE FROM alterationdata WHERE tname = :oldTeacherName");
    $stmt->execute([
        'oldTeacherName' => $oldTeacherName
    ]);

    // Check if the deletion was successful
    if ($stmt->rowCount() > 0) {
        echo "<p style='color:red'>Record deleted successfully.</p>";
    } else {
        echo "No record found with the given teacher name.";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
