<?php

// Loops

/* 

- for
- while
- do-while
- foreach

 */


 /* to run a statements multiple times! we used loops */


 /* for loop */

 # WHY WE USE THIS LOOP
 /* we use for loop if we know how many times our loops will going to be executed  ie. we know the range of loop */


 /* Syntax */

 # for([initialization]; [condition]; [final-expression])

 /* Syntax */


 for ($i=1; $i <= 10 ; $i++) { 
	 # code...
	 $n = 3;
	 echo $i * $n . "<br>";
 }

 /* for loop */



 /* while loop */

 # WHY WE USE THIS LOOP
/* we use while loop, if we know the condition of the code which needs the condition to be true in the loop but we didn't know the range how many times the loop will run */


/* Syntax */
/* 
while (condition)
{
	// Statements
} */

/* Syntax */


$i = 1;

while ($i <= 10) {
	# code...
	echo "Number is:", $i, "<br>";
	$i++;
}

 /* while loop */




 /* do - while loop */

 # WHY WE USE THIS LOOP
 /* we use do -while loop, if we want to run the statement or code once (atleast 1 time) whithout knowing the condition needs to the true of false*/


 /* example of this loop is TV: if we on the TV it shows us a random Channel in it and then after we needs to press a button to change the channel */

 /* Syntax */

 /* 

 do {
	 //statement
 }
 while (condition);

  */

 /* Syntax */


 $j = 11;

 do {
	 # code...

	 echo "Number is:", $j, "<br>";
	 $j ++;
 } while ($j <= 10);

 /* do - while loop */



 /* for - each loop */

 # WHY WE USE THIS LOOP
 /* is used if we want to iterate through the elements of an array */

 $arr = array(2, 4, 6, 8,10);


 foreach($arr as $number)
 {
	echo "Number is:", $number, "<br>";
 }


 // Associate Array
 $student = ["pankaj" => 30, "Shyam" => 35, "Ram" => 20, "Zeel" => 45 ];

 foreach ($student as $name => $age) {
	 # code...
	 echo "<br>". $name . " : " .  $age . "<br>";
 }

 /* for - each loop */
