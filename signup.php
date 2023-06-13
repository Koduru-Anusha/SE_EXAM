<?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the submitted form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // Validate the form data
        if (!empty($username) && !empty($email) && !empty($password) && !empty($password)) {
            if ($password === $cpassword) {
                // Database connection configuration
                $servername = 'localhost';
                $dbname = 'emailphp';
                $dbusername = 'root';
                $dbpassword = '';

                // Create a connection to the database
                $con = new mysqli($servername, $dbusername, $dbpassword, $dbname);

                // Check if the connection is successful
                if ($con->connect_error) {
                    die('Connection failed: ' . $con->connect_error);
                }

                // Prepare the SQL statement to insert user details into the database
                $sql = "INSERT INTO reg (username, email, password) VALUES ('$username', '$email', '$password')";

                // Execute the SQL statement
                if ($con->query($sql) === TRUE) {
                    // User details inserted successfully
                    echo "<script> alert('Details Successfully Saved.'); window.location.href = 'smi.html'; </script>";
                } else {
                    // Error occurred while inserting user details
                    echo 'Error: ' . $sql . '<br>' . $con->error;
                }

                // Close the database connection
                $con->close();
            } else {
                // Password and confirm password do not match
                echo "<script> alert('Password and confirm password do not match'); window.location.href = 'signup.html'; </script>";
            }
        } else {
            // Required fields are empty
            echo 'Please fill in all required fields.';
        }
    }
?>