<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{


        $email = $_POST['email'];
        $password = $_POST['password'];
        
            $servername = 'localhost';
                $dbname = 'emailphp';
                $dbusername = 'root';
                $dbpassword = '';
                $con = new mysqli($servername, $dbusername, $dbpassword, $dbname);
                if ($con->connect_error) {
                    die('Connection failed: ' . $con->connect_error);
                }
                $query = "SELECT password FROM reg WHERE email='$email'";
                $result = $con->query($query);
                
                if ($result->num_rows > 0) {
                    $sql="UPDATE reg set  password='$password' WHERE email='$email'";
                    // User details inserted successfully
                    if ($con->query($sql) === TRUE){
                    echo "<script> alert('Password successfully changed.'); window.location.href = 'kkkkklogin.html'; </script>";
                    }
                    else{
                        echo "<p>Something goes wrong. Please try again</p>";
                        }
                } else {
                    // Error occurred while inserting user details
                    echo 'Error: ' . $query . '<br>' . $con->error;
                }
                $con->close();
                
                
        }
        




?>