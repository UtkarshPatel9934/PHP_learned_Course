<?php

// builds a connection to the Database


// Two ways to connect DB

# 1. mysqli - MySql Improved

// if we use mysqli we can only connect the MySql DataBase only.


# 2. pdo - PHP Data Object

// if we use pdo we can connect all types of the DataBases!






// creating variables to connect the DB

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "phpbasicdb";


// Open a new connection to the MySQL server Alias of mysqli::__construct
$conn = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Connection Error: " . mysqli_connect_error());
// connection using mysqli




if($conn)
{
	echo "connected! to the DataBase: " . $db_name;
	
	
	// fetching all records from DataBase
	$sql_Statement = "SELECT * FROM `students`";


	// mysqli_query() - Performs a query on the database
	$results = mysqli_query($conn, $sql_Statement);


	// fetch the whole data into array using - mysqli_fetch_assoc()

	// Fetch a result row as an associative array - mysqli_fetch_assoc($results)

	echo "<br>";
	echo "<br>";
	echo "<hr>";

	while($row = mysqli_fetch_assoc($results))
	{
		// echo "<pre>";
		// var_dump($row);
		/* 
					array(4) {
						["id"]=>
						string(1) "1"
						["stu_name"]=>
						string(13) "Utkarsh Patel"
						["course"]=>
						string(15) "Web Development"
						["created_on"]=>
						string(19) "2021-12-29 12:24:48"
						}

					array(4) {
						["id"]=>
						string(1) "2"
						["stu_name"]=>
						string(6) "Deepak"
						["course"]=>
						string(3) "MBA"
						["created_on"]=>
						string(19) "2021-12-29 12:24:48"
						}
		 */

		
		 echo $row['stu_name'] . " : " . $row['course'] . "<br>";

	}
}


