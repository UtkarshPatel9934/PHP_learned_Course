<?php


# For GET Method

if(isset($_GET) && $_GET['name'] != '')
{
	
	echo "<br>";
	echo $_GET['name'];
	echo "<br>";
	echo $_GET['email'];
	
}



# or 


if(!empty($_GET))
{
	echo "<br>";
	echo $_GET['name'];
	echo "<br>";
	echo $_GET['email'];
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET Method</title>
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
		<form action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="GET">
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
