<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Header file for the purpose of a login system">
<meta name=viewport content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<!--Written using help from a tutorial by mmtuts.
https://www.youtube.com/watch?v=LC9GaXkdxF8-->
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
  </picture> </header>
<section>
  <nav>
	<div class="topnav">
  <a class="active" a href="index.php">Home</a>
  <?php
    if (isset($_SESSION['userId'])) {
      echo '<a href="bookform.php">Make New Listing</a>';
    }
  ?>
  <a href="contactUs.php">Contact Us</a>
  <div class="search-container">
  <form action="searchbar.php" method="post" >
  <input class="searchbar" name='searchbar' type="text" placeholder="Search..">
<select name='sell' class='barselect' >
        <option value="buy">Looking For</option>
        <option value="sell">For Sale</option>
  </select>

  <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
<a class="advanced" a href="searchform.php">Advanced Search</a>
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
</nav>
</section>
</body>
</html>

