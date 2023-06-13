<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        /* Add any additional styles for search results if needed */
    </style>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Retrieve the teacher name and exam date inputs from the form
    $teacherNameInput = $_POST['teacherNameInput'];
    $examDateInput = $_POST['examDateInput'];

    // Connect to the database
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

    // Prepare the SQL statement to retrieve teacher names where exam date and teacher name do not match the inputs
    $stmt = $conn->prepare("SELECT tname FROM sheet1 WHERE date <> ? AND tname <> ?");
    
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the input parameters to the statement
    $stmt->bind_param("ss", $examDateInput, $teacherNameInput);

    // Execute the statement
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    // Get the result set
    $result = $stmt->get_result();

    // Display the teacher names where exam date and teacher name do not match the inputs
    if ($result->num_rows > 0) {
        echo "<div class='results'>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["tname"] . "</li>";
        }
        echo "</ul>";
        echo "</div>";
    } else {
        echo "No matching teacher names found.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
