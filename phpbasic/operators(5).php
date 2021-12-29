<?php
// Operators

// 4 + 5 = 9

# 4 and 5 are Operands
# + is Operator


/* Arithmetic Operators */

/* $a = 10; 
$b =  20; */
/* $c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $b / $a;
$g = $b % $a;
$a++;
$b--;
echo "Sum of a and b is:" . $c;
echo '<br>';
echo "Sum of a Minus b is:" . $d;
echo '<br>';
echo "Sum of a Multiply by b is:" . $e;
echo '<br>';
echo "Sum of a divide b is:" . $f;
echo '<br>';
echo "Sum of a Modulus b is:" . $g;
echo '<br>';
echo "Sum of a++ is:" . $a;
echo '<br>';
echo "Sum of b-- is:" . $b;
 */
/* Arithmetic Operators */



/* Assignment Operators */

/* $c = $a + $b; // Assignment Operator

$a += $b; // $a = $a+$b;

$a -= $b;

$a *= $b;

$a /= $b;

$b %= $a;

echo $a;
echo $b; */

/* Assignment Operators */


/* Comparision Operators */
/* $x  = 10;
$y = 30;

// == 
if($x == $y )
{
	echo "A is equal to b";
}
echo '<br>';
// !=
if($x != $y )
{
	echo "A is not equal to b";
}
echo '<br>';
//  >
if($x > $y )
{
	echo "A is greater to b";
}
echo '<br>';
// < 
if($x < $y )
{
	echo "A is less than to b";
}
echo '<br>';
// >=
if($x >= $y )
{
	echo "A is greater than or equal to b";
}
echo '<br>';
// <
if($x <= $y )
{
	echo "A is less than or equal to b";
} */

/* Comparision Operators */




/* Logical Operators */

$a = 5;
$b = 10;

$c =0;

if($a AND $b)
{
	/* if we assign the value of zero 0 to the variable so in that case AND didn't shows True in the output */
	echo "True";
}
echo "<br>";
if($a && $b)
{
	/* if we assign the value of zero 0 to the variable so in that case AND didn't shows True in the output */
	echo "True";
}
echo "<br>";


if(!$c) /* if condition is true it makes it false or vice versa */
{
	echo "True";
}
echo "<br>";

$x = 5;
$y = 0;

if($x OR $y)
{
	echo "True";
}
echo "<br>";
if($x || $y)
{
	echo "True";
}
echo "<br>";
/* Logical Operators */





/* Conditional Operator - Ternary Operators - ?; */

$a = 10;

echo $a > 10 ? "Greater than 10" : "Less than or equal to 10";

/* Conditional Operator - Ternary Operators - ?; */
