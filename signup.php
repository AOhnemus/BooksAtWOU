<!DOCTYPE html>
<html>
<head>
<title>
Account Signup Page
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css">
</link>
</head>
<body>
<?php
require "header.php"
?>
<section>
<article>
<div class="container">
<h1>Create an Account</h1>
<?php
  if(isset($_GET['error']) || isset ($_GET['signup']) ) {
    if ($_GET['error'] == "emptyfields") {
      echo '<p> Fill in all the fields ya goof</p>';
    } else if ($_GET['error'] == "invalidemail") {
      echo '<p> Invalid Email</p>';
    } else if ($_GET['error'] == "invaliduid") {
      echo '<p> Invalid Username</p>';
    } else if ($_GET['error'] == "invalidemailuid") {
      echo '<p> Invalid username and password</p>';
    } else if ($_GET['error'] == "passwordcheck") {
      echo "<p> Passwords didn't match</p>";
    } else if ($_GET['error'] == "sqlerror") {
      echo '<p> Something went wrong on our end, try again and if it fails again, contact support.</p>';
    } else if ($_GET['error'] == "usertaken") {
      echo '<p> Username is already taken</p>';
    } else if ($_GET['signup'] == "success") {
      echo '<p> Signup successful.</p>';
    }
  }
?>
<form action="signupHandle.php" method="post">
<input type="text" name="uid" placeholder="Username"><br>
<input type="text" name="email" placeholder="E-mail"><br>
<input type="password" name="pwd" placeholder="Password"><br>
<input type="password" name="pwdConfirm" placeholder="Confirm Password"><br>
<button type="submit" name="signupSubmit">Signup</button>
</form>
</div></article>
</section>
</body>
</html>
