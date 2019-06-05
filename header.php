<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Header file for the purpose of a login system">
<meta name=viewport content="width=device-width, initial-scale=1">
<title></title>
</head>
<!--Written using help from a tutorial by mmtuts.
https://www.youtube.com/watch?v=LC9GaXkdxF8-->
<body>
	<div>
	<?php
		if (isset($_SESSION['userId'])) {
			echo '<form action="logoutHandle.php" method="post">
			<button type="submit" name="logoutSubmit">Logout</button></form>';
		} else {
			echo '<form action="loginHandle.php" method="post">
			<input type="text" name="mailuid" placeholder="Username/E-mail">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="loginSubmit">Login</button>
			</form><a href="signup.php">Signup</a>';
		}
	?>
	</div>

</body>
</html>

