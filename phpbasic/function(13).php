<?php


/* Functions */

/* 						What is functions:

		1. A functions is a block of code written in a program to perform some specific task.

		2. A function takes information as parameter, executes a block of statements or performs opetations on this parameteres and returns the result.


					Syntax

		1. Any name ending with an open and closed pranthesis is a function.

		2. A function name always begins with the keyword function.

		3. To call a function we just need to write its name followed by the paranthesis.

		4. A function name cnnot start with number. It can start with aplhebet or underscore.

		5. A function name is not case-sensitive.

		# To declare a function:

		function function_name () {
			// block of statements
		}


		# To call a function

		function_name();



		# Types of function:

		1. Built-In Functions : PHP provides us with huge collection of built-in library functions. To use those we just need to call them as per our requirment. e.g: var_dump(), fopen(), print_r() etc.

		2. User Defined Function: Using this we can create our own packages of code and use it whereever necessary by simply calling it.
 */


 // defining a function

 function sayHello(){
	 // function body

	 echo "Hello World!";
 }


 // function calling
 sayHello();
 sayHello();

 // by building a function we can reuse it for all.


 

 # function with arguments

 # what is parameters: if we add a variables in paranthesis while  declaring a function it's called a parameters
 
 function add($num1, $num2){ // parameters
	$sum = $num1 + $num2;

	echo $sum;
 }


 # what is arguments: if we passed a values in paranthesis while calling a function it's called an arguments
 echo "<br>";
 add(13,17); // arguments

 

 # return function:

 function addreturn($numOne, $numTwo){
	$sum12 = $numOne + $numTwo;

	return $sum12; // Return statemetns
 }

 echo "<br>";
 $finalAns = addreturn(3,7);
 echo $finalAns;





 # using "..." token access variable argumets:

 /* function sum($one, $two, $three){

 } */
 // in the above code we have to use three parameters variables compulsory to access the values passed as an arguments and it always need to be equal to the number of values passed as an argument.


 // but in PHP we can do it as another way : just like an array to access N number of arguments values
 echo "<br>";

function sum(...$numbers){
	// echo "<pre>";
	// var_dump($numbes);

	$Total = 0;


	// to ckeck if we have a values or not in our array : $numbers

	if(!empty($numbers))
	{
		foreach ($numbers as $n) {
			# code...

			$Total += $n;

		}
	}


	return $Total;
 } 


 $result = sum(1,3,5,1);

 echo "Sum = ". $result;





 // 					how we do the above step as older way : 



 echo "<br>";

 function multiply(){
	 
	 
	// to check the number of arguments in an array:
	 
	$numberOfArgs = func_num_args();
	 
	echo "Number of arguments passed is " .  $numberOfArgs . "<br>" . "Argument 1st is = " . func_get_arg(0) ."<br>" . "Argument 2nd is = " . func_get_arg(1);
	// to check the particualar arg unsing index also.
	// die();
	 
	 
	 $mul = 1;
	 // returns an array comprising a function's argument list
	//  $args = func_get_args();

	//  var_dump($args);

	foreach(func_get_args() as $args)
	{
		
		$mul *= $args;
	}
	 
	return $mul;




 }

 $multiplyThis = multiply(5,6);

 echo "<br>";
 echo "Final Multiplied value is: " . $multiplyThis;









 				/* Passing arguments by values and by reference */


# passing arguments by value. - values doesn't change at the original address of the variable

function show_message($msg){
	$msg .=  " , Nice to see You here!";

	echo $msg;
}		

$message = "Hello Uki";
echo "<br>";
show_message($message); // passed argument by value.

echo "<br>";
echo $message;



echo "<br>";
# passing argument by reference using "&" - values does change at the original address of the variable


function show_mess(&$msg) // passed by refernce!
{
	$msg .=  " , Nice to see You here!";

	echo $msg;
}		

$message = "Hello Uki"; // previous value
echo "<br>";
 // Note:  by passing it as refernce the actual values of the variable is also gonna be change!
 show_mess($message); // updated value >>>> Hello Uki , Nice to see You here!
 // passed argument by reference.


echo "<br>";
echo $message;








					/* Default argument values */
// to set the default argument simply type the variable_name = <default value> while declaring a function!


/* Note: always make the default variable at the last position while declaring function */
function show_name($name, $prefix = "Mrs.") // correct way!
{
	return $prefix . " " . $name;
}
// function show_name_($prefix = "Mrs.", $name) // Incorrect way!
/* {
	return $prefix . " " . $name;
}
 */
// here while calling the function if we doesn't pass the values in it, it doesn't throws an error.
$saveUserName =  show_name("Pankaj", "Mr.");
echo "<br>";
echo "<br>";
echo $saveUserName;