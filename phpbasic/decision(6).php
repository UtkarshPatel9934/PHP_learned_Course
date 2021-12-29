<?php


// Decision Making Statements

/* 

# if statement
# if - else Statement
# switch Statement

 */



# if Statement

$a =10;


if($a >= 10)
{
	echo "A is Greater than or equal to 10";
}


/* date() - is a php function */

$day = date('D');

echo "<br>";

if($day == "Fri")
{
	echo "Weekend is Coming soon!";
}

// echo "<br>" . $day;


# if Statement



# if-else Statement

echo "<br>";

if($day == "Sun")
{
	echo "it's Weekend";
}
else{
	echo "Weekdays!";
}

# if-else Statement


# if-elseif Statement
echo "<br>";
if($day == "Sun")
{
	echo "Weekend complete soon";
}
else if($day == "Sat"){
	echo "Weekdend!";
}
else
{
	echo "WeeekDays!";
}

# if-elseif Statement



# switch Statements

$weekdays = date('1');
echo "<br> Switch Statement";

switch ($weekdays) {
	case 'Saturday':
	case 'Sunday':
		echo "Happy Weekend";
		break;
	case 'Friday':
		echo "Weekend Coming soon";
		break;
	
	default:
		echo "Week Days!";
		break;
}

# switch Statements