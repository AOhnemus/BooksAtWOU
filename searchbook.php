<!DOCTYPE html>
<html lang="en">
<head>

<title>Books@WOU - Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css">
</link>
</head>
<body>


<header>
  <picture>
    <source media="(max-width: 601px)"
            srcset="sitesimages/Books@WOU.png">
			
	<source media="(min-width: 602px)"
            srcset="siteimages/Desktopheadertest3.png">
			
    <source media="(min-width: 923px)"
            srcset="siteimages/Desktopheader.png">
			
	<img src="images/header.png">

  </picture>
</header>

<section>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="bookform.html">Make New Listing</a></li>
	  <li><a href="searchform.html">Search For a Book</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav>

<main>  
  <article>

<?php

//connect  to the database 
$con=mysqli_connect("localhost","website","","WOUBooks"); 

//Online?
if ( mysqli_connect_errno() ) {
	echo "MySQL failed to connect. " . mysqli_connect_error();
}

	
// if(preg_match("^/[A-Za-z]+/", $_POST['searchtitle'])){

$searchtitle=$_POST['searchtitle'];
$searchyear=$_POST['searchyear'];
$searchsubject=$_POST['searchsubject'];
$searchauthor=$_POST['searchauthor'];
	   // if($searchtitle){  
	 

//-query  the database table 
$sql="SELECT * FROM books WHERE title LIKE '%" . $searchtitle . "%' AND year LIKE '%" . $searchyear . "%' AND subject LIKE '%" . $searchsubject . "%' AND author LIKE '%" . $searchauthor . "%' AND sell LIKE '%" . $sell . "%'"; 

//-run  the query against the mysql query function 
$result=mysqli_query($con, $sql); 
if($result){
//-create  while loop and loop through result set 
while($row=mysqli_fetch_array($result)){ 
    print "<br>";
    print '<div class="container">';

	
	$subject = array();
	$year = array();
	$title = array();
	$author = array();
	$price = array();
	$posterEmail = array();
	$ISBN = array();
	$imgPath = array();


	$subject[] = $row['subject'];
	$year[] = $row['year'];
        $title[] = $row['title'];
	$author[] = $row['author'];
	$price[] = $row['price'];
	$posterEmail[] = $row['posterEmail'];
	$ISBN[] = $row['ISBN'];
	$implodeEmail = implode("",$posterEmail);
	$sell = $row['sell'];
	$imgPath = $row['imgPath'];	
	
	print '<img src="' . $imgPath . '" width="100">';
	if ($sell == 1) {
		print "<b>Sell Offer</b><br>";
	} else {
		print "<b>Buy Offer</b><br>";
	}


	print "<b>Subject: </b>" . implode("",$subject);
	print "<b>Year Published: </b>" . implode("",$year);
	print "<b>Book Title: </b>" . implode("",$title);
	print "<b>     Author: </b>" . implode("",$author);
	print "<b>     Price: </b>" . implode("",$price);
	print "<b>     ISBN: </b>" . implode("",$ISBN);
	print "<b><br>Contact Email: </b> <a href=mailto:'$implodeEmail'> $implodeEmail</a>";
	
    print '</div>';
	print "\n";
} 
print "<br>";	 
		}
	  
mysqli_close($con);
?>
</main>
</div>
<footer>
</footer>
</body>
</html>
