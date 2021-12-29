<?php

/* Arrays - key value pair collection */


/* 

- Indexed Array (Numeric Array)
- Associate Array
- Multidimensional Array

 */


/* Indexed Array */

/* starts from the index value zero 0 */

$arr = array(1,2,3,4,5);

var_dump($arr);

// at index zero
echo "<br>";
echo "At index zero : "  . $arr[0];
echo "<br>";
echo "At index one : "  . $arr[1];


$mixedValuesArray = array(1, "Utkarsh", 3.14, 111, 1244.46666);


/* To add new information to the array - at the end of the array */

array_push($mixedValuesArray, "Zeel");

/* To add new information to the array - at the end of the array */

/* To remove new information to the array - at the ebeginningnd of the array */

array_shift($mixedValuesArray);

/* To remove new information to the array - at the beginning of the array */



/* if we want to replace the value of the array at the specific index */

$mixedValuesArray[1] = "pie";

/* if we want to replace the value of the array at the specific index */


/* we can access the specific value of the indexed array by print_r function */

echo "<br>";

print_r($mixedValuesArray[1]);

echo "<br>";

/* we can access the specific value of the indexed array by print_r function */

$mixedValuesArray[1] = "pie";

/* if we want to replace the value of the array at the specific index */

/* print_r() - is used to print information about variable in the human readable lang */

echo "<pre>";
print_r($mixedValuesArray);

/* 

Array
(
    [0] => 1
    [1] => Utkarsh
    [2] => 3.14
    [3] => 111
    [4] => 1244.46666
)

*/

/* Indexed Array */







/* Associated Array */

/* is to associate a bond between key value pair for easier understanding */

$marks = ["Maths" => 70, "science" => 90, "English" => 46, "Gujarati" => 75];

var_dump($marks);


echo $marks['Maths'];

echo "<br>";
/* to check the length (how many elements in array) of the array we use -  count() function */

echo count($marks); // 4 

/* to check the length of the array we use -  count() function */


/* Associated Array */







/* Multidimensional array */


$studentsMarks = array(
	"Pankaj" => array("Maths" => 70, "science" => 90, "English" => 46, "Gujarati" => 75),
	"Zeel" => array("Maths" => 66, "science" => 93, "English" => 23, "Gujarati" => 79),
	"Utkarsh" => array("Maths" => 56, "science" => 78, "English" => 10, "Gujarati" => 56),
);


echo "<pre>";

$studentsMarks["Pawan"] = array("Maths" => 44, "science" => 57, "English" => 89, "Gujarati" => 99);

print_r($studentsMarks);
print_r($studentsMarks["Pankaj"]["Maths"]);


/* Multidimensional array */






/* IMP functions in array */
echo "<br>";


$student = array("Rohan","Pawan","Pankaj");



// to check the string is included or already exists in the array or not.

if(in_array("Pankaj2", $student))
{
	echo "Exists";
}
else{
	echo "Doesn't Exists";
}



echo "<br>";
$students = array("Rohan" => "New Delhi","Pawan" => "Agra","Pankaj" => "Noida");

/* to check the key exists or not! */
if(array_key_exists("Pawan", $students))
{
	echo "Yes";
}
else
{
	echo "No";
}





/* is used to add an element to an array's starting element */
//  array_unshift();

echo "<br>";
/* is used to check the length of the array */
// echo count($students);


echo "<br>";
/* is used to get the last indexed value of an array */
// echo end($students);





/* IMP functions in array */