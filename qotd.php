<?php 
  $page_title = "Question of the Day (QOTD)";
  include 'header.php'; 
  include 'db_connect.php';

  $show_double_vote_warning = isset($_GET['error']) && $_GET['error'] == 'doublevote';
  $show_success_vote = isset($_GET['i']) && $_GET['i'] == 'success';
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['ppizza'])) {
        $jcaemail = mysqli_real_escape_string($conn, $_POST['email']);
        $count_query = "SELECT COUNT(Email) FROM Pizza WHERE Email = '$jcaemail'";
        $result = mysqli_query($conn, $count_query);
        $final_count = mysqli_fetch_assoc($result);
        if ($final_count['COUNT(Email)'] > 0) {
            header("Location: qotd.php?error=doublevote");
            exit();
        } else {
            $insert_sql = "INSERT INTO Pizza (Email, Vote)
            VALUES ('$jcaemail', '{$_POST['ppizza']}');";
            mysqli_query($conn, $insert_sql);
            header("Location: qotd.php?i=success");
            exit();
        }
    }

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

<h2> JUBILEANS, SETTLE A POPULAR DEBATE!!! </h2>
<h3> THIS IS A SPECIAL EDITION OF THE WEBSITE AVAILABLE ONLY ON: April 30, 2026 </h3>
<h3> YOU MAY ONLY VOTE ONCE </h3>

<section class="forms">
<form action = "qotd.php" method = "post">
  <label for="email">JCA Email (required):</label>
  <input type="email" id="email" name="email" required pattern="[a-z]+@(jca\.edu\.ph|student\.jca\.edu\.ph)"
  title="Please use your @jca.edu.ph or @student.jca.edu.ph email address.">
  <fieldset style="border: none; padding: 0; margin-top: 10px;">
      <legend>Does pineapple belong on pizza?</legend>
  <input type="radio" id="yesppizza" name="ppizza" value="Yes" checked>
  <label for="yesppizza">YES</label> <br>
  <input type="radio" id="noppizza" name="ppizza" value="No">
  <label for="noppizza">NO</label>
  </fieldset>
  <input type="submit" value="Submit">
</form>
</section>

<h3> Note: You do not need to be logged in to vote. </h3>

<h3> <a href = "results.php">Results</a> </h3>

<?php if ($show_double_vote_warning) { ?>
<h3 style="color:red"> YOU HAVE ALREADY VOTED. YOU CANNOT VOTE AGAIN! </h3>
<?php } ?>
<?php if ($show_success_vote) { ?>
<h3 style="color:green"> Congratulations! You have voted. </h3>
<?php } ?>

</body>
</html>
