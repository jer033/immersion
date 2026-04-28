<?php
$page_title = "Register New Account"; 
include 'header.php';
$show_taken_error = isset($_GET['error']) && $_GET['error'] == 'username_has_been_taken';
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
<form action = "regsuccess.php" method = "post" onsubmit = "return validate()" >
  <label for="us">Username (required):</label>
  <input type="text" id="us" name="us">
  <p id="usreqs" style="font-size:16px;margin:1px">
    Your username must have at least 6 characters. </p>

<p id="usernametaken" style="visibility: <?php echo $show_taken_error ? 'visible' : 'hidden'; ?>; color:red; font-size:16px; margin:1px;"> 
    <br> This username has already been taken. Please choose another username.
</p>

  <label for="pw">Password (required):</label>
  <input type="password" id="pw" name="pw">
  <p id="pwreqs" style="font-size:16px;margin:1px">
    Your password must have at least 8 characters, at least one uppercase or lowercase letter, and at least one digit (0-9). </p>
  <input type="submit" value="Submit">
</form>
</section>

<script>

function validate()
{
  let username = document.getElementById("us").value;
  let password = document.getElementById("pw").value;

  let all_clear = true;

  //check for the validity of the username and the password
  if (username.length < 6) {
    document.getElementById("usreqs").style.color = "red";
    all_clear = false;
  }
  else
    document.getElementById("usreqs").style.color = "black";

  if ((password.length >= 8) && (/\d/.test(password)) && (/[a-z]/i.test(password))) {
    document.getElementById("pwreqs").style.color = "black";
  }
  else {
    document.getElementById("pwreqs").style.color = "red";
    all_clear = false;
  }

  return all_clear;
}

</script>

</body>
</html>
