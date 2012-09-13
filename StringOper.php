<?php
$stringOne = 'PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag';

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
	echo "The string $found is found in 1st string at index $pos. and occurs ";
	echo substr_count($stringOne, 'PHP');
	echo ' times';
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
$i = 0;

while($words[$i])
$i++;
echo '3] The Array of words are: ';
PrintArray($i,$words);
function PrintArray($i,$words)
{
  if($i<0) 
      {
         return;
      }
      else{
           PrintArray(--$i,$words); 
           echo " ";
           echo $words[$i];
        }
}
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

$totalLength = strlen($stringOne);
$half = $totalLength/2;
$fourParts= $half/2+1;

$arr2 = str_split($str, $half);
$firstHalf = $arr2[0];
$secondHalf = $arr2[1];

$firstTwoParts = str_split($firstHalf, $fourParts);
$nextTwoParts = str_split($secondHalf, $fourParts);

echo '10] Four equal parts of 1st string are : ';
echo '<br/>';

echo "1st=> $firstTwoParts[0]";
echo '<br/>';
echo "2nd => $firstTwoParts[1]";
echo '<br/>';
echo "3rd => $nextTwoParts[0]";
echo '<br/>';
echo "4th => $nextTwoParts[1]";
echo '<br/>';
echo '<br/>';

echo '<br/>';
echo '<br/>';

//Find the length of string 1 & 2

$stringOneLength = strlen($stringOne);
$stringTwoLength = strlen($stringTwo);
echo "answer 14] Length of string one is $stringOneLength";
echo '<br/>';
echo "Length of string two is $stringTwoLength";

echo '<br/>';
echo '<br/>';

echo '<br/>';
echo '<br/>';

//removing html tags

echo '12] string after removing html tags is => ';
echo strip_tags($stringOne);

echo '<br/>';
echo '<br/>';

echo '<br/>';
echo '<br/>';
//string after splitting at . and reversing =>
echo '11] string after splitting at . and reversing => ';

$arr = explode(".", $stringOne);

$revArr = array_reverse($arr);
echo '<pre>';
print_r($revArr);
echo '</pre>';

//to find occurance of php and print
echo '11] to find occurance of php and print => ';
$subString = strtok($stringOne, " ");              
    
    while ($subString !== false) {
    
      if((strcmp($subString,"PHP"))==0)
      {
          echo "$subString found in string one";
	  echo '<br/>';
       }
     $subString = strtok(" \n\t");
    }


?>


