<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- TO DO: STYLE with CSS -->

<?php 
  $page_title = "Inquiry Feedback"; 
  include 'header.php'; 
?>

<?php

$must_hide = false;
$name_err = $email_err = $quest_err = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"]) || empty($_POST["lname"])) {
    $must_hide = true;
    $name_err = true;
  } 

  if (empty($_POST["email"])) {
    $must_hide = true;;
    $email_err  = true;
  } 
  
  if (empty($_POST["question"])) {
    $must_hide = true;
    $quest_err = true;
  } 

  if ($must_hide) { 
    ?>
<section class = "boxed3" id = "problem">
Unfortunately, we could not process your request because of the following reason(s):

    <ul>
        <?php if ($name_err) {?>
        <li> Your first or last name was left blank.
        <?php } ?>
        <?php if ($email_err) {?>
        <li> Your email was left blank or invalid.
        <?php } ?>
        <?php if ($quest_err) {?>
        <li> You did not input a question.
        <?php } ?>
    </ul>

You may try resubmitting the form through <a href = "contact.php"> this page </a>. Thank you!
</section>

<?php
}
else {
    ?>

<section class = "boxed3" id = "allclear">

Thank you, <?php echo htmlspecialchars($_POST["fname"] . ' ' . $_POST["lname"]); ?>!<br>
We will reach out to you via the email that you provided: <?php echo htmlspecialchars($_POST["email"]); ?> <br>
As a reminder, your inquiry was: <br>

<?php echo nl2br(htmlspecialchars($_POST["question"])); ?> <br>

<i> Please wait for 2-3 business days for us to respond. </i> <br>

In the meanwhile, feel free to browse the rest of our website. The home page can be accessed at <a href="index.php">Home</a>. <br>
You may also refer to our <a href="faq.php">Frequently Asked Questions.</a>

</section>

<?php
}
}

?>

</body>
</html>
