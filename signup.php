<?php
require "header.php"
?>
<h1>Signup</h1>
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
<?php
require "footer.php";
?>
