<?php
// Retrieve form data
$teacherName = $_POST['firstname'];
$assignment = $_POST['lastname'];
$examType = $_POST['country'];
$subject = $_POST['subject'];

// Prepare email content
$to = "cb.en.u4cse20103@cb.students.amrita.edu"; // Replace with the recipient's email address
$subject = "New Form Submission";
$message = "Teacher Name: $teacherName\n";
$message .= "Assignment: $assignment\n";
$message .= "Exam Type: $examType\n";
$message .= "Subject: $subject\n";

// Set headers
$headers = "From: abhishekaa002@gmail.com"; // Replace with the sender's email address

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send the email.";
}
?>
