<?php
$con=mysqli_connect("localhost","website","","WOUBooks");
//Online Debug.
if ( mysqli_connect_errno() ) {
	echo "MySQL failed to connect. " . mysqli_connect_error();
}

print "<br>";

if ($_GET['action'] == 'create') {
	$title = mysqli_real_escape_string($con, $_GET['title']);
	$author = mysqli_real_escape_string($con, $_GET['author']);
	$posterEmail = mysqli_real_escape_string($con, $_GET['posterEmail']);
	$ISBN = mysqli_real_escape_string($con, $_GET['ISBN']);
	$price = mysqli_real_escape_string($con, $_GET['price']);
	$sell = $_GET['sell'];
	if ($sell == 'sell') {
		$sellBool = 1;
		print ("Sell");
	} else {
		$sellBool = 0;
	}
	mysqli_query($con,"INSERT INTO books (title, author, posterEmail, ISBN, price, sell) VALUES ('$title', '$author', '$posterEmail', '$ISBN', '$price', $sellBool);"
	);
}
mysqli_close($con);
header('Location: bookform.html');
?>
