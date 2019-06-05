<!DOCTYPE html>
<html lang="en">
<head>
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
 </nav>

  <article>
    <h2>Reach out to us!</h2>
  <div class="container">
<form method="post" action="contact.php">
  <label for="fname">First Name</label>
  <input class='formbox'  type="text" name="fname" placeholder="Your name..">
  <label for="lname">Last Name</label>
  <input class='formbox'  type="text" name="lname" placeholder="Your last name..">
  <label for="email">Email Address</label>
  <input class='formbox'  type="text" name="email" placeholder="Your email address">

 <label for="reason">Reason for Contacting Books@WOU</label>
  <select  name="reason">
      <option value="generalfeedback">General Feedback</option>
      <option value="improperemailuse">Improper Use of Email Address by Another User</option>
      <option value="siteissue">Technical Issue with Books@WOU Website</option>
      <option value="duplicate">Report Duplicate Offer or Posting</option>
      <option value="spam">Report Spam Posting</option>
      <option value="inappropriate">Report Inappropriate Posting</option>  
	  <option value="other">Other</option>
    </select>
  <label for="comment">Comment</label>
  <textarea name="comment" placeholder="Write something.." style="height:200px"></textarea>

  <input type="submit" value="Submit">

</form>
</div>
  </article>
</section>
<footer>
</footer>
</main>
</body>
</html>

