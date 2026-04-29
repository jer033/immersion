<?php 
  $page_title = "Question of the Day (QOTD) Results";
  include 'header.php'; 
  include 'db_connect.php';

$yes_query = "SELECT COUNT(Vote) FROM Pizza WHERE Vote = 'Yes'";
$no_query = "SELECT COUNT(Vote) FROM Pizza WHERE Vote = 'No'";
$yes_result = mysqli_query($conn, $yes_query);
$no_result = mysqli_query($conn, $no_query);
$yes = mysqli_fetch_assoc($yes_result)['COUNT(Vote)'];
$no = mysqli_fetch_assoc($no_result)['COUNT(Vote)'];

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

<h2> Here are the current results: </h2>

<h3> Yes: <?php echo $yes; ?> </h3>
<h3> No: <?php echo $no; ?> </h3>

<h2> An image of the current pizza: </h2>
<?php if ($yes > $no) { ?>
<img src = "images/pineapple.jpg" alt = "Hawaiian" style="background-size: cover">
<?php } else if ($no > $yes) { ?>
<img src = "images/no_pineapple.jpg" alt = "Pepperoni" style="background-size: cover">
<?php } else { ?>
<h2> The pizza will be decided with an additional vote! </h2>
<?php } ?>

</body>
</html>