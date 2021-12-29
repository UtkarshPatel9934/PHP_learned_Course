<?php

/* 

				POST Method

		1. The Post Method transfer information via HTTP headers.

		2. The Post methods doesn not have any restrication on the data size to be sent.

		3. The POST method can be used to send ASCII as well as binary data.

		4. The data sent by the POST method goes through HTTP header so security depends on the HTTP protocol. 
		By using secure HTTP you can make sure that your information is secure.

		5. The PHP provides $_POST associative array to access all the sent informatioon using POST method.

 */

# For GET Method

if(isset($_POST) && $_POST['name'] != '')
{
	
	echo "<br>";
	echo $_POST['name'];
	echo "<br>";
	echo $_POST['email'];
	
}



# or 

# Note: An Associate array that by default contains the content of $_GET, $_POST and $_COOKIE.

if(!empty($_REQUEST))
{
	echo "<br>";
	echo $_REQUEST['name'];
	echo "<br>";
	echo $_REQUEST['email'];
	
}
 


?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST Method</title>
	<style>
		.container{
			width: 50%;
			margin: auto;
			background-color: blue;
			color: white;
			padding: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="POST">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="">
			<br>
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="">
			<br>
			<br>
			<input type="submit" name="submitbtn" value="SUBMIT">
			
		</form>

		<!-- Data send using GET Method  -->
		<!-- http://localhost/phpbasic/formaction.php?name=Utkarsh&email=slf.chatkas%40gmail.com&submitbtn=SUBMIT -->
		<!-- Data send using GET Method  -->

		<!-- now move to the formaction.php to access the data send using GET method -->
	</div>
</body>
</html>
