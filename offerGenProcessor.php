<!doctype html>
<html lang="en">
<head>
<title> Books@WOU - Offers (PHP TEST)</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css">
</link>
</head>
<body>

<header>
  <h2>Books@WOU</h2>
  <h5>Your resource for reading materials that cuts out the middle man.</h5>
</header>
<nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="bookform.html">Make New Listing</a></li>
<!--      <li><a href="#">Search for Books</a></li>-->
<!--      <li><a href="#">FAQ</a></li>-->
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
</nav>
<main>
<?php
/*Consider adding mysqli_real_escape_string functionality or something similar to prevent SQL attacks.
Not really useful considering that nobody is going to bother with that, but, if I can get it working, why
not? Didn't do it for this sprint due to it being unnecessary. Limited time.*/

$con=mysqli_connect("localhost","website","","WOUBooks");
//Online?
if ( mysqli_connect_errno() ) {
	echo "MySQL failed to connect. " . mysqli_connect_error();
}

if ($_GET['action'] == 'create') {

}
$sql = "SELECT * FROM books";
$output = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($output)) {
	print "<article>";
	$title = array();
	$author = array();
	$price = array();
	$posterEmail = array();
	$ISBN = array();

	$title[] = $row['title'];
	$author[] = $row['author'];
	$price[] = $row['price'];
	$posterEmail[] = $row['posterEmail'];
	$ISBN[] = $row['ISBN'];
	$implodeEmail = implode("",$posterEmail);
	$sell = $row['sell'];

	if ($sell == 1) {
		print "<b>Sell Offer</b><br>";
	} else {
		print "<b>Buy Offer</b><br>";
	}
	print "<b>Book Title: </b>" . implode("",$title);
	print "<b>     Author: </b>" . implode("",$author);
	print "<b>     Price: </b>" . implode("",$price);
	print "<b>     ISBN: </b>" . implode("",$ISBN);
	print "<b><br>Contact Email: </b> <a href=mailto:'$implodeEmail'> $implodeEmail</a>";

/*
	foreach($row as $value) { //So, up until this point I've had to implode arrays to get them to display right. This here just... does it. No idea why but, hey, thanks function!
		print $value . " ";
	}
*/
	print "</article>";
}
mysqli_close($con);
?>
</main>
</div>
<footer>
</footer>
</body>
</html>
