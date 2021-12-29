<?php


# GET and POST

# There are two methods of HTTP request

# 1. GET - Request data from a specified resource
# 2. POST - Submits data to be processed to a specified resource


/*
				 GET - HTTP request method

	1. The GET method sends the encoded user information appended to the page request.
	
	2. The GET method produces a long string that appears in your server logs, in the browser's location box.

	3. The GET method is restricted to send up to 1024 characters only.

	4. Never use GET method if you have password or other sensitive information to be sent to the server.

	5. GET can't be used to send binary data, like images or word documents to the server.

	6. The data sent by GET method can be accessed using QUERY_STRING environment variable.

	7. The PHP provides $_GET associated array to access all the sent information using the GET method.
 */

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
		<form action="formaction.php" method="GET">
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
