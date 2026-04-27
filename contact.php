<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php 
  $page_title = "Contact"; 
  include 'header.php'; 
?>

<h2> Contact Information </h2>
<section class="boxed" style="background-color: #e4ff82">
<p> Jerome is the developer of this website. For inquiries, please contact him at: </p>
<p> Email: jante@student.jca.edu.ph </p>
<p> Phone: (+63) 976 541 7793 </p>
<p> Office Hours: 8AM - 5PM </p>
</section>

<h2> Do you have any inquiries? </h2>
<section class="forms">
<form action = "inquire.php" method = "post" onsubmit = "return validate()" >
  <label for="fname">First name (required):</label>
  <input type="text" id="fname" name="fname"> <p id="fnproblem" style="display:none;color:red;font-size:12px;">This field is required.</p> <br>
  <label for="lname">Last name (required):</label>
  <input type="text" id="lname" name="lname"> <p id="lnproblem" style="display:none;color:red;font-size:12px;">This field is required.</p> <br>
  <label for="email">Email (required):</label>
  <input type="email" id="email" name="email"> <p id="emproblem" style="display:none;color:red;font-size:12px;">This field is required.</p> <br>
  <label for="question">Your inquiry (required):</label><br>
  <textarea id="question" name="question" rows="8" cols="180"></textarea> <p id="quproblem" style="display:none;color:red;font-size:12px;">This field is required.</p> <br>
  <input type="submit" value="Submit">
</form>
</section>

<script>

function validate()
{
  let fn = document.getElementById("fname").value;
  let ln = document.getElementById("lname").value;
  let em = document.getElementById("email").value;
  let qu = document.getElementById("question").value;

  let all_clear = true;

  if (fn=="") {
    document.getElementById("fnproblem").style.display = "block";
    all_clear = false;
  }
  else
    document.getElementById("fnproblem").style.display = "none";

  if (ln=="") {
    document.getElementById("lnproblem").style.display = "block";
    all_clear = false;
  }
  else
    document.getElementById("lnproblem").style.display = "none";

  if (em=="") {
    document.getElementById("emproblem").style.display = "block";
    all_clear = false;
  }
  else
    document.getElementById("emproblem").style.display = "none";

  if (qu=="") {
    document.getElementById("quproblem").style.display = "block";
    all_clear = false;
  }
  else
    document.getElementById("quproblem").style.display = "none";
  
  return all_clear;
}

</script>

<h2> Rate us! </h2>
<section class="forms">
<form action = "rate.php" method = "post">
    <!-- create a Likert scale -->
  <label for="nameop">Name (optional):</label>
  <input type="text" id="nameop" name="nameop"><br>
  <label for="emailop">Email (optional):</label>
  <input type="email" id="emailop" name="emailop"><br>

  Please rate your experience from 1-5:<br>
  <input type="radio" id="exp1" name="r15" value=1 checked>
  <label for="exp1">1 (worst experience)</label><br>
  <input type="radio" id="exp2" name="r15" value=2>
  <label for="exp2">2 </label><br>
  <input type="radio" id="exp3" name="r15" value=3>
  <label for="exp3">3 </label><br>
  <input type="radio" id="exp4" name="r15" value=4>
  <label for="exp4">4 </label><br>
  <input type="radio" id="exp5" name="r15" value=5>
  <label for="exp5">5 (best experience)</label><br>


  <label for="reason">Would you like to explain why? (optional):</label><br>
  <textarea id="reason" name="reason" rows="8" cols="180"></textarea><br>
  <input type="submit" value="Submit">
</form>
</section>

</body>
</html>
