<?php
$page_title = "Forum"; 
include 'header.php';
include 'db_connect.php';

//check if a message was just sent
if ($_SESSION['loggedin']) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message'])) {
        $message_content = mysqli_real_escape_string($conn, $_POST['message']);
        $username = $_SESSION['username'];
        $sent_on = date("Y-m-d H:i:s");
        $update_sql = "INSERT INTO Forum (Username, Content, SentOn)
                       VALUES ('$username', '$message_content', '$sent_on')";
        
        mysqli_query($conn, $update_sql);
        header("Location: forum.php");
        exit();
    }
}

//retrieve 25 most recent messages from the server
$retrieve_command = "SELECT Username, Content, SentOn FROM (SELECT *
FROM Forum ORDER BY MessageNo DESC LIMIT 25) AS subquery ORDER BY MessageNo ASC";
$fetched_data = mysqli_query($conn, $retrieve_command);
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
    
<h4 style="margin-top:3px;margin-bottom:3px;"> These are the 25 most recent messages sent to the forum. </h4>
<h4 style="margin-top:3px;margin-bottom:3px;"> To send a message, you must be logged in. </h4>

<section class="messageboard">
<!-- display the 25 most recent messages with username and time stamp -->
<?php while ($row = mysqli_fetch_assoc($fetched_data)) {?>
<p class="messagesender"> <?php echo htmlspecialchars($row['Username']); ?></p>
<p class="message"> <?php echo htmlspecialchars($row['Content']); ?></p>
<p class="stamp"> <?php echo $row['SentOn']; ?></p> <br>
<?php } ?>

<?php if ($_SESSION['loggedin']) { ?>
<form action = "forum.php" method = "post">
  <input type="text" id="message" name="message" placeholder="Send a message" required>
  <input type="submit" value="Send">
</form>
<?php } else { ?>
<p> You must be logged in to send a message.
<?php } ?>

</section>

</body>
</html>

