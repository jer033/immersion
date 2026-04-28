<?php
$page_title = "Logout Successful"; 
include 'header.php';

session_unset();
session_destroy();
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
<h2>You have been logged out.</h2>
<h3>You may continue to browse our <a href="index.php">website</a> even while logged out.</h3>
</section>

</body>
</html>