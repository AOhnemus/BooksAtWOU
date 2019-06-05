<?php
  session_start();
  if(!isset($_SESSION['userId']) ) {
    header("Location: index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<main>
<head>
<!-- Developed by Aidan Ohnemus. Modified by Ben Roerig (Hope I spelled your name right. -aidan)-->
<title>Books@WOU - Offers (PHP/SQL TEST)</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
<?php
require "header.php";
?>
  <article>
<!-- Source for guidance on using PHP with MySQL comes from this stackoverflow post:
https://stackoverflow.com/questions/13673123/creating-unique-web-pages-from-mysql-database

Thanks, cerd! Even though most of your info was outdated and I just went to W3 Schools, but it was a useful start.-->
<!-- So this just... stopped working for some reason. -->
<h2>Enter your book details here:</h2>
<div class="container" >
<form action="offerFormProcessor.php" method="post" action="POST" enctype="multipart/form-data">
	<input type='hidden' name='action' value='create'/>



	Subject/Genre:
  <select  name="subject">
      <option value="Book Subject or Genre.." disabled selected hidden>Book Subject or Genre..</option>
      <option value="Accounting & Finance">Accounting & Finance</option>
      <option value="Agriculture & Forestry">Agriculture & Forestry</option>
      <option value="American Studies">American Studies</option>
      <option value="Anatomy & Physiology">Anatomy & Physiology</option>
      <option value="Anthropology">Anthropology</option>
      <option value="Architecture">Architecture</option>
      <option value="Art & Design">Art & Design</option>  
      <option value="Biological Sciences">Biological Sciences</option>  
      <option value="Building">Building</option>  
      <option value="Business & Management ">Business & Management </option>  
      <option value="Chemistry">Chemistry</option>  
      <option value="Communication ">Communication </option>  
      <option value="Computer Science">Computer Science</option>  
      <option value="Counselling">Counselling</option>  
      <option value="Creative Writing">Creative Writing</option>  
      <option value="Criminology">Criminology</option>  
      <option value="Dentistry">Dentistry</option>  
      <option value="Drama">Drama</option>  
      <option value="Economics">Economics</option>  
      <option value="Education">Education</option>  
      <option value="Engineering">Engineering</option>  
      <option value="English">English</option>
      <option value="Fashion">Fashion</option>  
      <option value="Film Making">Film Making</option>  
      <option value="Food Science">Food Science</option>  
      <option value="Forensic Science">Forensic Science</option>  
      <option value="Foreign Language">Foreign Language</option>  
      <option value="Geography ">Geography </option>  
      <option value="Geology">Geology</option>  
      <option value="History">History</option>  
      <option value="Recreation & Tourism">Recreation & Tourism</option>  
      <option value="Law">Law</option>  
      <option value="Information Management">Information Management</option>  
      <option value="Marketing">Marketing</option>  
      <option value="Mathematics">Mathematics</option>  
      <option value="Engineering">Engineering</option>  
      <option value="Architecture">Architecture</option>
      <option value="Medicine">Medicine</option> 
      <option value="Music">Music</option> 
      <option value="Nursing">Nursing</option> 
      <option value="Occupational Therapy">Occupational Therapy</option> 
      <option value="Optometry, Ophthalmology & Orthoptics">Optometry, Ophthalmology & Orthoptics</option> 
      <option value="Pharmacology & Pharmacy">Pharmacology & Pharmacy</option> 
      <option value="Philosophy">Philosophy</option> 
      <option value="Physics and Astronomy">Physics and Astronomy</option> 
      <option value="Politics">Politics</option> 
      <option value="Psychology">Psychology</option> 
      <option value="Sociology">Sociology</option> 
      <option value="Sports Science">Sports Science</option> 
      <option value="Theology & Religious Studies">Theology & Religious Studies</option> 
	  <option value="other">Other</option>
    </select>

	Title:
	<input class='formbox'  type='text' name='title' placeholder="Book Title.."  />
	Year Published:	
	<input class='formbox'  type='text' name='year' placeholder="Year Book was Published.." />
	Author:
	<input  class='formbox' type='text' name='author' placeholder="Author.."  />

	<input type='hidden' name='posterEmail' value='<?php echo $_SESSION['userEmail']; ?>'>
	ISBN:
	<input class='formbox' type='text' pattern="[0-9]{10,13}" name='ISBN' placeholder="Valid ISBN.." />
	Price:
	<input type='number' step="0.01" max="100000" name='price' placeholder="Desired Price for Sale or Purchase.."  /> <br>
	Is this an offer to buy a book, or sell it?
	<input type='radio' name='sell' value='sell' checked>Sell
	<input type='radio' name='sell' value='buy'>Buy
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Submit" name="submit">

</form>
</div>
  </article>
</section>

<footer>
</footer>
</main>
</body>
</html>
