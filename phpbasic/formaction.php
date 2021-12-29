<?php

echo "<pre>";
var_dump($_GET);




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