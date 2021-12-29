<?php

// Cookies

// seeting a cookie
// setcookie("name", "Pankaj", time() + 3600);

// setcookie("age", 35, time() + 3600);



// $_COOKIE - An associative array of variables passed to the current script via HTTP Cookies.


print_r($_COOKIE);


# accessing the cookies....

echo "<br>";
// to get the name cookie

print_r($_COOKIE['name']);

echo "<br>";
// to get the age cookie

print_r($_COOKIE['age']);


echo "<br>";
if(isset($_COOKIE['name']))
{
	echo "Hello, " . $_COOKIE['name'];
}




# deleting cookie or remove cookies....
setcookie("name", "Pankaj", time() - 3600); // to delete cookeies we simply adds " - " sign.







// set cookies in form of an arrays
/* 
setcookie("cookie[one]", "Cookie One");
setcookie("cookie[two]", "Cookie Two");
setcookie("cookie[three]", "Cookie Three"); */

if(isset($_COOKIE["cookie"]))
{
	echo "<pre>";
	print_r($_COOKIE["cookie"]);
}

// set cookies in form of an arrays
