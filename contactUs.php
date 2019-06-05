<?php
  session_start();
?>
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
<?php
  require "header.php";
?>
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

