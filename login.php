<?php
$page_title = "Login"; 
include 'header.php';
$show_password_error = isset($_GET['error']) && $_GET['error'] == 'incorrect_password';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php?info=already_logged_in");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<section class="forms">
<form action = "loginsuccess.php" method = "post" >
  <label for="us">Username (required):</label>
  <input type="text" id="us" name="us"> <br>

  <label for="pw">Password (required):</label>
  <input type="password" id="pw" name="pw">

<p style="visibility: <?php echo $show_password_error ? 'visible' : 'hidden'; ?>; color:red; font-size:16px; margin:1px;"> 
    <br> Either the username or password entered is incorrect.
</p>

<p style="color:black; font-size:16px; margin:1px;"> <br> If you do not have an account, you can register for one <a href = "register.php">here</a>.</p>

  <input type="submit" value="Submit">
</form>
</section>

</body>
</html>



