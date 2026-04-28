<?php
$page_title = "Login Successful"; 
include 'header.php';
include 'db_connect.php';

$username = mysqli_real_escape_string($conn, $_POST['us']);
$password = $_POST['pw'];
$fetch_encrypted = "SELECT EncryptedPassword FROM Users WHERE Username = '$username'";
$encryptedrow = mysqli_query($conn, $fetch_encrypted);
$success = false;

if ($row = mysqli_fetch_assoc($encryptedrow)) {
    $encryptedpw = $row['EncryptedPassword'];
    if (!password_verify($password, $encryptedpw)) {
    header("Location: login.php?error=incorrect_password");
    $success = false;
    exit();
  }
else {
    $success = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}
}
else {
    header("Location: login.php?error=incorrect_password");
    $success = false;
    exit();
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="boxed3">
<?php if ($success) { ?>
<h2>Welcome back, <?php echo htmlspecialchars($username); ?>! </h2>
<h3>You have successfully logged in.</h3>
<h3>You may continue to browse our <a href="index.php">home page</a> or play our <a href="memory.php">game</a> and save your high scores.</h3>
<?php }
else { ?>
<h3>Unfortunately, something went wrong. Please try again later. </h3>
<?php } ?>
</section>

</body>
</html>
