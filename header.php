<?php
session_start();
?>
<header>
<div class="navbar" id = "menubar">
  <a href="index.php">Home</a>
  <a href="skills.php">Skills and Learnings</a>
  <a href="memory.php">Educational Game</a>
  <a href="leaderboard.php">Leaderboard</a>
  <a href="contact.php">Contact</a>
  <a href="faq.php">FAQ</a>
  <?php if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)||($page_title === "Login Successful")) { ?>
<a href="logout.php">Logout</a>
  <?php }
else { ?>
<a href="login.php">Login</a>
<?php } ?>
</div>

<h1><img src = "phoenix.jpg" alt = " " style="float:right;width:250px;height:80px"><?php echo $page_title; ?></h1>
</header>
