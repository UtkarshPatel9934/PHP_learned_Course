<?php

/* if we make a file with .php ectension and in that file we only want to write the php code so in that case we can eleminate the "?>" code from the syntaxt which looks like below*/
		
		/*  <?php
			// Php Code goes here!
		*/


		// this is single line comments
		# this is also single line comments 
		/* this is 
		multiliine comments in
		PHP
		*/

echo "PHP Comments <br>";




// PHP Case Sensitivity
ECHO "echo is in Upper Case";



// Variables are Case Sensitive

// Creating a variable
$age  = 30;

// WE can concatinate the variable value in the preinting message with the ".' DOT Symbol!
echo "<br>My Age is :" . $age;

/* it doesn't print the value 30 in it because AGE , Age and age are all Different from Each others  */
echo "<br>My Age is :" . $Age;






// Braces make Blocks

$a = 10;

if($a == 10)
	echo "<br>This is True!";

// if there is multiple statement then we compulsory have to add the { } after the if statement
if($a == 10)
{
	echo "<br>This is Fine and Same!";
	echo "<br>This is True and Same!";
}



echo "<br>PHP Script from CMD";


/* 
>php -v : to check the version

> cd "Path Where it stores the file"

> php index.php
 */




$x = 20;
$y = 40;
$z = $x + $y;

echo "<br>";
echo $z;

/* We can also print the n number of variable's value in the (1) echostatement itself */
echo "<br>";
echo $x, $y, $z; // 204060
/* We can also print the n number of variable's value in the (1) echostatement itself */


/* What is the difference between print and echo */

/* 

1.

echo = We can also print the n number of variable's value in the (1) echostatement itself

print = We cannot also print the n number of variable's value in the (1) echostatement itself


2. Echo is faster then print

eg: print $x, $b; we can do like this in print

 */

