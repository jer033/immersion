<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- TO DO: STYLE with CSS -->

<header>
<div class="navbar" id = "menubar">
  <a href="index.html">Home</a>
  <a href="skills.html">Skills and Learnings</a>
  <a href="memory.html">Educational Game</a>
  <a href="contact.html">Contact</a>
</div>

<h1><img src = "phoenix.jpg" alt = " " style="float:right;width:250px;height:80px">Inquiry Feedback </h1>
</header>

<?php

$must_hide = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"]) || empty($_POST["lname"])) {
    $must_hide = true;
  } 

  if (empty($_POST["email"])) {
    $must_hide = true;;
  } 
  
  if (empty($_POST["question"])) {
    $must_hide = true;
  } 

  if ($must_hide) { 
    ?>
<section class = "boxed3" id = "problem">
Unfortunately, we could not process your request because at least one of the following is true:

    <ul>
        <li> Your first or last name was left blank.
        <li> Your email was left blank or invalid.
        <li> You did not input a question.
    </ul>

Please try again. Thank you!
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

In the meanwhile, feel free to browse the rest of our website. The home page can be accessed at <a href="index.html">Home</a> <br>
You may also refer to our <a href="faq.html">Frequently Asked Questions.</a>

</section>

<?php
}
}

?>

</body>
</html>
