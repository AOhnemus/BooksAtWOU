<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ignite412@gmail.com";
    $email_subject = "Customer Support";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['reason']) ||
        !isset($_POST['comment'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $email_from = $_POST['email']; // required
    $reason = $_POST['reason']; // not required
    $comment = $_POST['comment']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$fname)) {
    $error_message .= 'The First Name  you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$lname)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
 
    $email_message = "Team please respond ASAP.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Reason: ".clean_string($reason)."\n";
    $email_message .= "Comment: ".clean_string($comment)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank You For Your Comment! A Member of Our Awesome Team Will Respond to You Within 24 hours!

<nav>
    <ul>
	  <li><a href="index.html">Home</a></li>
      <li><a href="testform.html">Make New Listing</a></li>
      <li><a href="#">Search for Books</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav> 
 
<?php
 
}
?>


