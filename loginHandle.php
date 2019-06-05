<?php
ini_set('display_errors', 1);
error_reporting(~0);
ini_set('error_erporting', E_ALL);

if(isset($_POST['loginSubmit'])) {
  require 'dbHandle.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];
  if ( empty($mailuid) || empty($password) ) {
    header("Location: index.php?error=emptyfields");
    exit();
  } else { 
    $sql = "SELECT * FROM users WHERE uid=? OR email=?;";
    $statement = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($statement, $sql)) {
      header("Location: index.php?error=sqlerror");
      exit();

//Somewhere in 'ere, it's breakin'
    } else {
      mysqli_stmt_bind_param($statement, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($statement);
      $result = mysqli_stmt_get_result($statement);
      if ($row = mysqli_fetch_assoc($result)) {
	$pwdCheck = password_verify( $password, $row['pwd'] );
	if ($pwdCheck == false) {
	  header("Location: index.php?wrongpwd");
	  //This is an else if in case something wonky happens. Having an "else, you get to log in" is unsafe.
	} else if ($pwdCheck == true) {
	  session_start();
	  $_SESSION['userId'] = $row['id'];
	  $_SESSION['userUid'] = $row['uid'];
	  $_SESSION['userEmail'] = $row['email'];
	  header("Location: index.php?login=success");
	  exit();
	} else {
	  header("Location: index.php?wrongpwd");
	  exit();
	}
      } else {
	header("Location: index.php?error=nouser");
	exit();
      }
    }
  }
} else {
  header("Location: index.php");
  exit();
}
?>
