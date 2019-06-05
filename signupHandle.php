<?php
ini_set('display_errors', 1);
error_reporting(~0);
ini_set('error_reporting', E_ALL);

if (isset($_POST['signupSubmit'])) {

  require 'dbHandle.php';

  $username = $_POST['uid'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordConfirm = $_POST['pwdConfirm'];

  //Error Handling
  if ( empty($username) || empty($email) || empty($password) || empty($passwordConfirm) ) {
    header("Location: signup.php?error=emptyfields&uid=".$username."&email=".$email);
    exit();
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("\^[a-zA-Z0-9]*%/", $username) ) {
      header("Location: signup.php?error=invalidemailuid");
      exit();
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
      header("Location: signup.php?error=invalidemail&uid=".$username);
      exit();
  } else if ( !preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
      header("Location: signup.php?error=invaliduid&email=".$email);
      exit();
  } else if ($password !== $passwordConfirm) {
      header("Location: signup.php?error=passwordcheck&uid=".$username."&email=".$email);
      exit();
  } else { //Check if username is used already
    $sql = "SELECT uid FROM users WHERE uid=?;";
    $statement = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($statement, $sql)) {
      echo "Blah 6";
      header("Location: signup.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($statement, "s", $username);
      mysqli_stmt_execute($statement);
      mysqli_stmt_store_Result($statement);
      $resultCheck = mysqli_stmt_num_rows($statement); //# of results from database. Should be 1 if exists, 0 if it doesn't.
      if ($resultCheck > 0) {
        header("Location: signup.php?error=usertaken&email=".$email);
      } else {
        $sql = "INSERT INTO users (uid, email, pwd) VALUES (?, ?, ?);";
	$statement = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($statement, $sql)) {
	  header("Location signup.php?error=sqlerror");
	  exit();
        } else {
	  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

	  mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashedPwd);
	  mysqli_stmt_execute($statement);

	  header("Location: signup.php?signup=success");
	  exit();
        }
      }
    }
  }
  mysqli_stmt_close($statement);
  mysqli_close($con);
} else {
  header("Location: signup.php");
  exit();
}
