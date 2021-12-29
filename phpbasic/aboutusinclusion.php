<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us - using require</title>
</head>
<body>
	<?php
		require "headerinclusion.php";

		require_once "headerinclusion.php";
		// require "1headerinclusion.php";
		// include ("headerinclusion.php"); // we can also write it as like this
	?>

	<h1>About Us</h1>

	<div>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illum nulla minus non doloremque, debitis delectus! Exercitationem libero nemo aliquid odit maxime veniam veritatis blanditiis hic, ut eaque magnam inventore saepe, consectetur maiores numquam esse omnis fugit iste non suscipit eum tenetur reprehenderit. Cupiditate, odit?
	</div>



	<?php
		require "footerinclusion.php";
	?>
	
</body>
</html>