<?php
ini_set('display_errors', 1);
error_reporting(~0);
ini_set('error_reporting', E_ALL);


$con=mysqli_connect("localhost","website","","WOUBooks");
//Online Debug.
if ( mysqli_connect_errno() ) {
	echo "MySQL failed to connect. " . mysqli_connect_error();
}
print "<br>";

//Much of the file upload code is from W3Schools's article on PHP file uploading. Tried to make it my own, but it was a large part of it.

$timestamp = strval(time()); //Consider using an output that gives fractions of a second?

$target_dir = "uploads/";
$original_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($original_file,PATHINFO_EXTENSION));

$target_file = $target_dir . $timestamp . "." . $imageFileType;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($_POST['action'] == 'create') {
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$author = mysqli_real_escape_string($con, $_POST['author']);
	$posterEmail = mysqli_real_escape_string($con, $_POST['posterEmail']);
	$ISBN = mysqli_real_escape_string($con, $_POST['ISBN']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$sell = $_POST['sell'];
	if ($sell == 'sell') {
		$sellBool = 1;
		print ("Sell");
	} else {
		$sellBool = 0;
	}
	mysqli_query($con,"INSERT INTO books (title, author, posterEmail, ISBN, price, sell, imgPath) VALUES ('$title', '$author', '$posterEmail', '$ISBN', '$price', $sellBool, '$target_file');"
	);
}

mysqli_close($con);
//header('Location: bookform.html');
?>
