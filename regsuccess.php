<?php
include 'db_connect.php';

$username = mysqli_real_escape_string($conn, $_POST['us']);
$encrypted_password = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$sql = "INSERT INTO Users (Username, EncryptedPassword)
VALUES ('$username', '$encrypted_password')";

if (! mysqli_query($conn, $sql)) {
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
<h2>Congratulations, <?php echo htmlspecialchars($username); ?>! </h2>
<h3>You have successfully registered a new account.</h3>
<h3>Ypu may now proceed to our <a href="index.php>log-in page</a>.</h3>
</section>

</body>
</html>