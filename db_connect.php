<?php
$servername = "sql306.infinityfree.com"; // Your specific hostname
$username = "if0_41763999";             // Your MySQL username
$password = "j83LNbjYw5";            // Your account password
$dbname = "if0_41763999_customer_interactions";    // Your full database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Nothing: no errors
//Something: follow it
?>