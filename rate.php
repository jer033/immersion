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
<h2> Thank you! </h2>
<section class="boxed3">
<?php if ($_POST["r15"]==1 || $_POST["r15"]==2) { ?>
<p> We're sorry to hear that you did not enjoy our website. We always wish to improve our services. </p> 
<?php if (empty($_POST["reason"])) { ?>
<p> If you would like, could you tell us how we could improve our services? </p>
<?php } } ?>

<?php if ($_POST["r15"]==3 || $_POST["r15"]==4) { ?>
<p> We are delighted to hear that you enjoyed our website. It is always a pleasure to serve our visitors. However, we are always looking for room for improvement. </p> 
<?php if (empty($_POST["reason"])) { ?>
<p> If you would like, could you tell us how we could improve our services? </p>
<?php } } ?>

<?php if ($_POST["r15"]==5) { ?>
<p> We are delighted to hear that you enjoyed our website. It is always a pleasure to serve our visitors. </p> 
<?php if (empty($_POST["reason"])) { ?>
<p> If you would like, could you tell us what went so well? </p>
<?php } } ?>
</section>


<!--We are delighted to hear that you enjoyed our website. Can you tell us what went so well?-->

<section class="boxed3">
<p> We greatly appreciate your honest feedback. It helps us improve our services for you and for all future visitors of this website. </p>
<p> Should you have any further inquires, please return to our <a href = "contact.php">Contact</a> page and fill out the inquiries form. </p>
<p> You may also continue browsing our <a href ="index.php">website</a> page or look at our <a href = "faq.php">Frequently Asked Questions (FAQ)</a>. </p>
</section>


</body>
</html>
