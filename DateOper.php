<?php

//Current date
$today = date("d.m.y");
echo "Answer 7] today is $today";

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo "Answer 21] today is in array format $today";
$today = getdate();
echo '<pre>';
print_r($today);
echo '</pre>';
?>

