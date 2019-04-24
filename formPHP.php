
<?php
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $isbn = $_POST['ISBN'];
        $book_title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];

        email_from = 'timkorchagin97@gmail.com';
        
        email_subject = "New Book Submission";
        
        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                        "Book ISBN: $isbn.\n".
                        "Book Title: $book_title.\n".
                        "Book Author: $author.\n".
                        "Selling Price: $price.\n";

            $to = "tkorchagin17@mail.wou.edu";
            
            $headers = "From: $email_from \r\n";

            $headers = "Reply-To: $visitor_email \r\n";
            
            mail($to,$email_subject,$email_body,$headers);
            
            header("Location: WOU_Form.html");

?>










