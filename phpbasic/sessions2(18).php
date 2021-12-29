<?php


session_start();
/* 
// here the counter strats with the number saved in the sessions(18).php file.

# $_SESSION - An associative array containing session variables available to the current script.

if(isset($_SESSION['visit_counter']))
{
	$_SESSION['visit_counter'] += 1;
	
}
else
{
	$_SESSION['visit_counter'] = 1;
}

$message = "You have visited this page! " . $_SESSION['visit_counter'] . " times in this session";

echo $message;

// sessions in PHP

// used to get or provide the access the information across the site ie. accessing information in all the pages of the particular site.


 */


// accessing the user name in this welcome page

if(isset($_SESSION['user']))
{
	echo "Welcome back, " . $_SESSION['user'];
	
}


// set a new sessions

$_SESSION['course'] = "MCA";



// to Delete Single the sessions variable - vidit_counter

unset($_SESSION['visit_counter']);



// to destroy or delete all of the sessions variable

session_destroy();



echo "<br>";
echo "<br>";
echo "<hr>";

// to check how many sessions stored in the site!

echo "<pre>";

print_r($_SESSION);

echo "<hr>";




