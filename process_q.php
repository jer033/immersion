<?php

include 'db_connect.php';
$visitor_first_name = mysqli_real_escape_string($conn, $_POST['fname']);
$visitor_last_name = mysqli_real_escape_string($conn, $_POST['lname']);
$visitor_email = mysqli_real_escape_string($conn, $_POST['email']);
$visitor_inquiry = mysqli_real_escape_string($conn, $_POST['question']);

$sql = "INSERT INTO Questions (FName, LName, Email, Question)
VALUES ('$visitor_first_name', '$visitor_last_name', '$visitor_email', '$visitor_inquiry')";

if (mysqli_query($conn, $sql)) {
    header("Location: inquire.php");
    exit(); 
} else {
    echo "Error: " . mysqli_error($conn);
}
?>