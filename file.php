<?php
$stringOne = 'PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag';

$fh = fopen('/home/webonise/AmrutaTajane/PhpGithub/stringOne.txt', 'w') or die("can't open file");
fwrite($fh, $stringOne);
fclose($fh);

?>
