<?php

// to inclued one file content in the other file content!

// include()

// require()


/* Difference between require and include */

# in case of INCLUDE : if we provide a wrong path of our inclusion file then it doesn't affect our whole content so finnaly it throws an warning message but the rest of the content will runs as it is.


# in case of the REQUIRE : if we provide a incorrect path to it it will throws a fatal error and stop the whole content to being rendered



/* how to choose which one to use


# include - is for not necessary means if we know that if the particular content doesn't render and it doesn't required or compulsory so in that case we use include!


# require - is for complsory means if we want to save the data from the form to the database so first of all we have to build a connection to the database so we compulsory have to connect with our database so we use require in that case!
*/


/* 

# include_once

# require_once


we use this when we have to include the particular code in our file once only
*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Using include</title>
</head>
<body>
	<?php
		include "headerinclusion.php";
		
		include_once "headerinclusion.php";
		// include "header1inclusion.php";
		// include ("headerinclusion.php"); // we can also write it as like this
	?>

	<div>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illum nulla minus non doloremque, debitis delectus! Exercitationem libero nemo aliquid odit maxime veniam veritatis blanditiis hic, ut eaque magnam inventore saepe, consectetur maiores numquam esse omnis fugit iste non suscipit eum tenetur reprehenderit. Cupiditate, odit?
	</div>



	<?php
		include "footerinclusion.php";
	?>
	
</body>
</html>