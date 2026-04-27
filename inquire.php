<html>
<body>

<!-- TO DO: STYLE with CSS -->

Thank you, <?php echo htmlspecialchars($_POST["fname"] . ' ' . $_POST["lname"]); ?>!<br>
We will reach out to you via the email that you provided: <?php echo htmlspecialchars($_POST["email"]); ?> <br>
As a reminder, your inquiry was: <br>

<?php echo nl2br(htmlspecialchars($_POST["question"])); ?> <br>

<i> Please wait for 2-3 business days for us to respond. </i> <br>

In the meanwhile, feel free to browse the rest of our website. The home page can be accessed at <a href="index.html">Home</a> <br>
You may also refer to our <a href="faq.html">Frequently Asked Questions.</a>

</body>
</html>