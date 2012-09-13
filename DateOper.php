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

?>

