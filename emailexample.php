<?php
//Depreciated, remove later. Though, there's a few functions here I'm not familiar with that might be useful.
//Currently my PHP that interacts with the MySQL server doesn't do anything to prevent bad input. -Aidan

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "broehrig17@mail.wou.edu,tkorchagin17@mail.wou.edu,aohnemus14@mail.wou.edu";
    $email_subject = "New Book Submission";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['title']) ||
        !isset($_POST['author']) ||
        !isset($_POST['email']) ||
        !isset($_POST['ISBN']) ||
        !isset($_POST['price'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $title = $_POST['title']; // required
    $author = $_POST['author']; // required
    $email_from = $_POST['email']; // required
    $ISBN = $_POST['ISBN']; // not required
    $price = $_POST['price']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$title)) {
    $error_message .= 'The Title  you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$author)) {
    $error_message .= 'The Author you entered does not appear to be valid.<br />';
  }
 
  if(strlen($price) < 2) {
    $error_message .= 'The Price you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Title: ".clean_string($title)."\n";
    $email_message .= "Author: ".clean_string($author)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "ISBN: ".clean_string($ISBN)."\n";
    $email_message .= "Price: ".clean_string($price)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank You For Your Submission! 
 
<?php
 
}
?>

