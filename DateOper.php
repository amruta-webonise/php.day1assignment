<?php

//Current date
$today = date("d.m.y");
echo "Answer 7] today is $today";

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//date in array format
echo "Answer 21] today is in array format $today";
$today = getdate();
echo '<pre>';
print_r($today);
echo '</pre>';

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//date after 20 days
$today = date("Y-m-d");
$date = date("Y-m-d", strtotime($start . "+20 day"));
echo "Answer 20] today is $today.";
echo '<br/>';
echo "20 days later $date";
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';


//comparing two dates and finding the difference
 $first_date = "12-4-2010"; 
$second_date = "12-5-2011";
$first = strtotime($first_date);
 $second = strtotime($second_date);
$days = (strtotime($second_date)-strtotime($first_date))/(60*60*24);
 if ($first > $second) 
{ 
	echo "Answer 19] $first_date is greater than $second_date and will come later.";
	echo '<br/>';
	echo "difference between the two dates is of $days";
} 
else 
{ 
	echo "Answer 19] $first_date is smaller than $second_date and will come before.";
	echo '<br/>';
	echo "difference between the two dates is of $days";
} 
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//adding 7 days to current date
$today = date("Y-m-d");
$date = date("Y-m-d", strtotime($start . "+7 day"));
echo "Answer 9] today is $today.";
echo '<br/>';
echo "7 days later $date";
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//printing 12th jan 2012

echo 'Answer 8th] ';
echo date("d \\t\h M Y", mktime(0, 0, 0, 1 , 12, 2012));


?>

