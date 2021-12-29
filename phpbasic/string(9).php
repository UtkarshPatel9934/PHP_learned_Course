<?php

$name = "Pankaj";
$lastName = "Kumar";

$fullName = $name . " " . $lastName;


echo "<br>";
var_dump($fullName);

echo "<br>";
echo $fullName;



/* if we want to check the length of the string - lenght starts from 0 */

echo strlen($fullName);

echo "<br>";

/* Note: String can be enclosed by both single quotes ' ' or double quotes " " */


// to escape the double quotes-  if we need " " inside the string


$message = "Hello this is \"PHP\" Tutorial";


$message2 = 'Hello this is "PHP" Tutorial';
$message3 = 'Hello this is PHP Tutorial';


echo $message;
echo "<br>";
echo $message2;


/* to find the position of the first occurence of a substring in a atring */

if(strpos($message3, "PHP") !== false)
{
	echo "Found";
}
else
{
	echo "Not Found";
}



$filename = "Profile.php";

/* Returns part of a string - substr($string, $start, $length in int) */
// $extension = substr($filename, 8);
$extension = substr($filename, strlen($filename) - 4);
echo $extension;




echo "<br>";
/* joining and spliting */

/* how to break a string to make array */

$fruits = "apple, banana, orange";


# explode string - is used to make an array from one full string.

$fruitsARRAY = explode(",", $fruits);

echo "<pre>";
var_dump($fruitsARRAY);



echo "<br>";
/* or how to make a string from array  */

$languages = ["PHP", "C", "Java", "Python"];

 # implode - is used to break array element to make an whole string of that array's element

 $langLIST = implode(",", $languages);

echo "<pre>";
var_dump($langLIST);