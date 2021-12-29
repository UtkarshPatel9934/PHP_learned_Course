<?php

/* File Upload */



// here in action we doesn't put any value so we get our data on the same page!


if(isset($_POST['submit']))
{
	$errors;

	// we use global variable $_FILES - in which we can get all information of our files

	// $_FILES : An associate array of items uploaded to the current script via the HTTP POST method.

	echo "<pre>";
	// Print_r :  Prints human-readable information about a variable
	print_r($_FILES);
	echo "<br>";
	echo "<br>";
	echo "<hr>";







	// collects data from the file uploaded!

	$fileName = $_FILES['filename']['name'];
	

	$file_TMP = $_FILES['filename']['tmp_name']; // /Applications/XAMPP/xamppfiles/temp/phpPYvKEe
	

	$fileSize = $_FILES['filename']['size']*0.000001 . " MB";
	

	$file_ex = explode(".", $fileName); // file.Jpg > jpg
	$fileExt = strtolower(end($file_ex)); // file.Jpg > jpg
	

	// collects data from the file uploaded!

	


	// to set the restrinction to the upload file types:
	

	$allowedExt = ["jpg", "png", "jpeg"];

	if(!in_array($fileExt, $allowedExt))
	{
		$errors = "😡 Invalid File extension! <br>Only jpg, jpeg and png are allowed....";

		echo $errors;
	}
	// to set the restrinction to the upload file types:






	//to set the restrinction to the file size : bytes size - uploads,  10 MB limit = 10485760 bytes
	if($fileSize > 10485760)
	{
		$errors = "😡 File size should not be grater than 10 MB";

		echo $errors;
	}
	//to set the restrinction to the file size : bytes size - uploads,  10 MB limit = 10485760 bytes







	// upload a file to the uploads folder

	if(empty($errors))
	{
		// we use moveuploaded_file to move our uploaded file to the particular path
		// move_uploaded_file(<Source - is our $file_TMP> , <destination is the path of the folder>) - Moves an uploaded file to a new location


		// getcwd() - Gets the current working directory. We do not need to pass any thing

		$destination = getcwd() . "/upload/" . $fileName;

		// echo $destination;

		// die() - Equivalent to exit
		// die();
		echo "<br>";
		if(move_uploaded_file($file_TMP,$destination)) 
		{
			echo "Great, File moved sucessfully! 👍";


			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "File Name is : " . $fileName;
			echo "<br>";
			echo "tmp_name is : " . $file_TMP;
			echo "<br>";
			echo "File size is : " . $fileSize;
			echo "<br>";
			echo "File extension is : " . $fileExt;
		}
		else
		{
			echo "Opps, file does't moved 👎";
		}
		
	}

	/* else{
		echo "<pre>";
		// Print_r :  Prints human-readable information about a variable
		print_r($_FILES);
	} */
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="filename">
		<input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>