<?php
include 'db_connect.php';

$username = mysqli_real_escape_string($conn, $_POST['us']);
$encrypted_password = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$check_users = "SELECT * FROM Users WHERE Username = '$username'";
$result = mysqli_query($conn, $check_users);
$success = true;

if (mysqli_num_rows($result) > 0) {
    header("Location: register.php?error=username_has_been_taken");
    $success = false;
    exit();
  }
  else {
    $sql = "INSERT INTO Users (Username, EncryptedPassword)
VALUES ('$username', '$encrypted_password')";
  }

if ((! mysqli_query($conn, $sql)) and ($success)) {
    $success = false;
    echo "Error: " . mysqli_error($conn);
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

<?php 
  $page_title = "Registration Successful"; 
  include 'header.php';
?>

<section class="boxed3">
<?php if ($success) { ?>
<h2>Congratulations, <?php echo htmlspecialchars($username); ?>! </h2>
<h3>You have successfully registered a new account.</h3>
<h3>You may now proceed to our <a href="login.php">login page</a>.</h3>
<?php }
else { ?>
<h3>Unfortunately, something went wrong. Please try again later. </h3>
<?php } ?>
</section>

</body>
</html>
