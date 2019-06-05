
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<main>
<title>Books@WOU</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css">
</link>
</head>
<body>

<?php
require "header.php";
?>
  <article>
    <h1>Browse Books for Sale by Subject</h1>
    <ul>
      <li><a href="offerGenProcessor.php">All Subjects</a></li>
    </ul>
  </article>
</section>
<div class="columns">

	<div class="leftcolumn">  
    <h2>For Sale</h2>
 
 <form action="browseSubject.php" method="post">
    <input type="hidden" name="sell" value="sell">
    <input type="hidden" name="subject" value="Accounting & Finance">               
	<input type="submit" class="browse" value="Accounting & Finance">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Agriculture & Forestry">
      <input type="submit" class="browse" value="Agriculture & Forestry">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="American Studies">
      <input type="submit" class="browse" value="American Studies">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Anatomy & Physiology">
      <input type="submit" class="browse" value="Anatomy & Physiology">
</form>
   
<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Anthropology">
      <input type="submit" class="browse" value="Anthropology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Architecture">
      <input type="submit" class="browse" value="Architecture">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Art & Design">
      <input type="submit" class="browse" value="Art & Design">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Biological Sciences">
      <input type="submit" class="browse" value="Biological Sciences">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Building">
      <input type="submit" class="browse" value="Building">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Business & Management">
      <input type="submit" class="browse" value="Business & Management">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Chemistry">
      <input type="submit" class="browse" value="Chemistry">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Communication">
      <input type="submit" class="browse" value="Communication">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Computer Science">
      <input type="submit" class="browse" value="Computer Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Counselling">
      <input type="submit" class="browse" value="Counselling">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Creative Writing">
      <input type="submit" class="browse" value="Creative Writing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Criminology">
      <input type="submit" class="browse" value="Criminology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Dentistry">
      <input type="submit" class="browse" value="Dentistry">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Drama">
      <input type="submit" class="browse" value="Drama">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Economics">
      <input type="submit" class="browse" value="Economics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Education">
      <input type="submit" class="browse" value="Education">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Engineering">
      <input type="submit" class="browse" value="Engineering">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="English">
      <input type="submit" class="browse" value="English">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Fashion">
      <input type="submit" class="browse" value="Fashion">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Film Making">
      <input type="submit" class="browse" value="Film Making">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Food Science">
      <input type="submit" class="browse" value="Food Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Forensic Science">
      <input type="submit" class="browse" value="Forensic Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Foreign Language">
      <input type="submit" class="browse" value="Foreign Language">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Geography">
      <input type="submit" class="browse" value="Geography">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Geology">
      <input type="submit" class="browse" value="Geology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="History">
      <input type="submit" class="browse" value="History">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Recreation & Tourism">
      <input type="submit" class="browse" value="Recreation & Tourism">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Law">
      <input type="submit" class="browse" value="Law">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Information Management">
      <input type="submit" class="browse" value="Information Management">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Marketing">
      <input type="submit" class="browse" value="Marketing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Mathematics">
      <input type="submit" class="browse" value="Mathematics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Medicine">
      <input type="submit" class="browse" value="Medicine">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Music">
      <input type="submit" class="browse" value="Music">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Nursing">
      <input type="submit" class="browse" value="Nursing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Occupational Therapy">
      <input type="submit" class="browse" value="Occupational Therapy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Optometry, Ophthalmology & Orthoptics">
      <input type="submit" class="browse" value="Optometry, Ophthalmology & Orthoptics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Pharmacology & Pharmacy">
      <input type="submit" class="browse" value="Pharmacology & Pharmacy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Philosophy">
      <input type="submit" class="browse" value="Philosophy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Physics and Astronomy">
      <input type="submit" class="browse" value="Physics and Astronomy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Politics">
      <input type="submit" class="browse" value="Politics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Psychology">
      <input type="submit" class="browse" value="Psychology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Sociology">
      <input type="submit" class="browse" value="Sociology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Sports Science">
      <input type="submit" class="browse" value="Sports Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="sell">
      <input type="hidden" name="subject" value="Theology & Religious Studies">
      <input type="submit" class="browse" value="Theology & Religious Studies">
</form>

  

  </div>
  
      
<div class="rightcolumn">
    
    <h2>Looking For</h2>

    <form action="browseSubject.php" method="post">
      <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Accounting & Finance"> 	      <input type="submit" class="browse" value="Accounting & Finance">
   </form>  
  
   <form action="browseSubject.php" method="post">
     
      <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Agriculture & Forestry">
      <input type="submit" class="browse" value="Agriculture & Forestry">
   </form>
   
   <form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="American Studies">
      <input type="submit" class="browse" value="American Studies">
   </form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Anatomy & Physiology">
      <input type="submit" class="browse" value="Anatomy & Physiology">
   </form>
   
<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Anthropology">
      <input type="submit" class="browse" value="Anthropology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Architecture">
      <input type="submit" class="browse" value="Architecture">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Art & Design">
      <input type="submit" class="browse" value="Art & Design">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Biological Sciences">
      <input type="submit" class="browse" value="Biological Sciences">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Building">
      <input type="submit" class="browse" value="Building">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Business & Management">
      <input type="submit" class="browse" value="Business & Management">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Chemistry">
      <input type="submit" class="browse" value="Chemistry">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Communication">
      <input type="submit" class="browse" value="Communication">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Computer Science">
      <input type="submit" class="browse" value="Computer Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Counselling">
      <input type="submit" class="browse" value="Counselling">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Creative Writing">
      <input type="submit" class="browse" value="Creative Writing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Criminology">
      <input type="submit" class="browse" value="Criminology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Dentistry">
      <input type="submit" class="browse" value="Dentistry">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Drama">
      <input type="submit" class="browse" value="Drama">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Economics">
      <input type="submit" class="browse" value="Economics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Education">
      <input type="submit" class="browse" value="Education">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Engineering">
      <input type="submit" class="browse" value="Engineering">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="English">
      <input type="submit" class="browse" value="English">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Fashion">
      <input type="submit" class="browse" value="Fashion">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Film Making">
      <input type="submit" class="browse" value="Film Making">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Food Science">
      <input type="submit" class="browse" value="Food Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Forensic Science">
      <input type="submit" class="browse" value="Forensic Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Foreign Language">
      <input type="submit" class="browse" value="Foreign Language">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Geography">
      <input type="submit" class="browse" value="Geography">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Geology">
      <input type="submit" class="browse" value="Geology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="History">
      <input type="submit" class="browse" value="History">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Recreation & Tourism">
      <input type="submit" class="browse" value="Recreation & Tourism">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Law">
      <input type="submit" class="browse" value="Law">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Information Management">
      <input type="submit" class="browse" value="Information Management">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Marketing">
      <input type="submit" class="browse" value="Marketing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Mathematics">
      <input type="submit" class="browse" value="Mathematics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Medicine">
      <input type="submit" class="browse" value="Medicine">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Music">
      <input type="submit" class="browse" value="Music">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Nursing">
      <input type="submit" class="browse" value="Nursing">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Occupational Therapy">
      <input type="submit" class="browse" value="Occupational Therapy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Optometry, Ophthalmology & Orthoptics">
      <input type="submit" class="browse" value="Optometry, Ophthalmology & Orthoptics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Pharmacology & Pharmacy">
      <input type="submit" class="browse" value="Pharmacology & Pharmacy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Philosophy">
      <input type="submit" class="browse" value="Philosophy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Physics and Astronomy">
      <input type="submit" class="browse" value="Physics and Astronomy">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Politics">
      <input type="submit" class="browse" value="Politics">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Psychology">
      <input type="submit" class="browse" value="Psychology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Sociology">
      <input type="submit" class="browse" value="Sociology">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Sports Science">
      <input type="submit" class="browse" value="Sports Science">
</form>

<form action="browseSubject.php" method="post">
	  <input type="hidden" name="sell" value="buy">
      <input type="hidden" name="subject" value="Theology & Religious Studies">
      <input type="submit" class="browse" value="Theology & Religious Studies">
</form>

</div>
    </div>

<footer>
</footer>
</main>
</body>
</html>
