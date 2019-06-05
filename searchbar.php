<!DOCTYPE html>
<html lang="en">
<head>

<title>Books@WOU - Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css">
</link>
</head>
<main>
<body>


<header>
  <picture>
  	<source media="(max-width: 577px)"
            srcset="siteimages/Mobileheader.png">
			
	<source media="(max-width: 922px)"
          srcset="siteimages/Tabletheader.png">		
			
	<source media="(min-width: 923px)"
            srcset="siteimages/Desktopheadertest3.png">
			
    
	<img src="siteimages/Desktopheadertest3.png">

  </picture>
</header>

<section>
  <nav>
	 <div class="topnav">
  <a class="active" a href="index.html">Home</a>
  <a href="bookform.html">Make New Listing</a>
  <a href="contact.html">Contact Us</a>
<div class="search-container">
  <form action="searchbar.php" method="post" >
  <input class="searchbar" name='searchbar' type="text" placeholder="Search..">
<button type="submit"><i class="fa fa-search"></i></button>  
</form>
</div>
</div>
  </nav>
  
  <article>

<?php

//connect  to the database 
$con=mysqli_connect("localhost","website","","WOUBooks"); 

//Online?
if ( mysqli_connect_errno() ) {
	echo "MySQL failed to connect. " . mysqli_connect_error();
}

	
// if(preg_match("^/[A-Za-z]+/", $_POST['searchtitle'])){

$searchbar=$_POST['searchbar'];
$searchsell=$_POST['sell'];

	   // if($searchtitle){  
if($searchsell === 'sell') {

$sql="SELECT * FROM books WHERE title LIKE '%" . $searchbar . "%' OR author LIKE '%" . $searchbar . "%' AND sell = TRUE";
}

else {

$sql="SELECT * FROM books WHERE title LIKE '%" . $searchbar . "%' OR author LIKE '%" . $searchbar . "%' AND sell = FALSE";
}


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


