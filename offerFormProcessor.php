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
	mysqli_query($con,"INSERT INTO books (title, author, posterEmail, ISBN, price) VALUES ('$title', '$author', '$posterEmail', '$ISBN', '$price');"
	);
}
mysqli_close($con);
print ("TEST");
//header('Location: testForm.html');
?>
