<?php


session_start();


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


// setting the name in session

$_SESSION['user'] = "Pankaj Kumar";



// forwading the user to the welcome page!

header('location:/phpbasic/sessions2(18).php');




