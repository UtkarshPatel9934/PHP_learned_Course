<?php
// variable Types

/*
1. All variable names are start with "$" symbol and they are case sensitive 
2. they can start with _ or Letter
*/

/* 1. both $var and $VAR are different from each other */
$var = 10;

$VAR = 10;

/* 2. */

$my_var;
$_my_var;

/* incorrect declaration of variable name: $my var;  and $4_my_var */

/* correct : $my4thVar */




/* DataTypes: */

echo '<br>';
/* 1. Integers */
$var1 = 10;
echo $var1;
echo '<br>';

/* 1. Integers */

/* 2. Doubles/floats */
$var2 = 3.14;
echo $var2;
echo '<br>';
/* 2. Doubles/floats */


/* 3. String */
$var3 = "Utkarsh Patel";
echo $var3;
echo '<br>';
/* 3. String */

/* 4. Null */
$var4 = null;
echo $var4;
echo '<br>';
/* 4. Null */


/* 5. Array */
$var5arraySyntax1 = array(2, 4, 6, 8);
$var5arraySyntax2 = [1, 3, 5, 7];
/* Associated array */
$var5arraySyntax3 = ["Pankaj" => 30, "Rohit" => 28] ;
/* Associated array */
echo $var5arraySyntax1;
echo $var5arraySyntax2;
echo $var5arraySyntax3;
// ArrayArrayArray
echo '<br>';
/* 5. Array */


/* 6. Object */

/* Making a Class called ABC */
class ABC {
	public $name;
	public function fun(){
		return "Hello I am Utkarsh Patel!";
	}
};
/* Making a Class called ABC */



/* Creating an Instance of the class */
$classABC_Obj = new ABC();
/* Creating an Instance of the class */

/* $classABC_Obj is called Object Variable */





echo $var4;
echo '<br>';
/* 6. Objects */


/* We have a function in php - that tells us about what type of Datatype it is and value stored in it. */
var_dump($var1); // int(10)
echo '<br>';
var_dump($var2); // float(3.140000000000000124344978758017532527446746826171875)
echo '<br>';
var_dump($var3); // string(13) "Utkarsh Patel" # provides a length of the string
echo '<br>';
var_dump($var4); // NULL
echo '<br>';
var_dump($var5arraySyntax1); // array(4) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(8) }
echo '<br>';
var_dump($var5arraySyntax2); //array(4) { [0]=> int(1) [1]=> int(3) [2]=> int(5) [3]=> int(7) }
echo '<br>';
var_dump($var5arraySyntax3); // array(2) { ["Pankaj"]=> int(30) ["Rohit"]=> int(28) }
echo '<br>';
var_dump($classABC_Obj); // array(2) { ["Pankaj"]=> int(30) ["Rohit"]=> int(28) }

/* We have a function in php - that tells us about what type of Datatype it is and value stored in it. */