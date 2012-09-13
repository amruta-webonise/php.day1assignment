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
	echo 'Answer 1], 2] PHP is present in string one. ';
	//displaying the position
	echo "The string $found is found in 1st string at index $pos.";
}

else
{
	echo 'PHP is not present in string one\n';
}

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
//splitting words into array

$words = explode(" ", $stringOne);

echo '3] The Array of words are: ';
echo '<pre>';
print_r ($words); 
echo '</pre>';

echo '<br/>';
echo '<br/>';
//capitalising the complete 1st string

echo '4] capitalised string is: ';
$str = strtoupper($stringOne);
echo $str;


echo '<br/>';
echo '<br/>';
//string concatenation

$stringConcat = $stringOne.$stringTwo;
echo "5] concatenated string is=> $stringConcat";

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//displaying strings one and two using heredoc
echo "6] ";
echo <<<HERE
string one is "$stringOne". 
<br/>
<br/>
string two is "$stringTwo". 
HERE;

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
?>


