<?php
$stringOne = 'PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.';

//echo $stringOne;

$stringTwo = "PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";

//echo $stringTwo;



//finding whether string occurs or not

$subStr = 'PHP';
$pos = strpos($stringOne, $subStr);

if($pos !== false)
{
	echo 'PHP is present in string one. ';
	//displaying the position
	echo "The string $found is found in 1st string at index $pos.";
}

else
{
	echo 'PHP is not present in string one\n';
}

echo '<br/>';
echo '<br/>';

//splitting words into array

$words = explode(" ", $stringOne);

echo 'The Array of words are: ';
echo '<pre>';
print_r ($words); 
echo '</pre>';

echo '<br/>';
echo '<br/>';
//capitalising the complete 1st string

echo 'capitalised string is: ';
$str = strtoupper($stringOne);
echo $str;


echo '<br/>';
echo '<br/>';
//string concatenation

$stringConcat = $stringOne.$stringTwo;
echo "concatenated string is=> $stringConcat";

?>


