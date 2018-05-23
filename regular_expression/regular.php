<?php

$text = "nayanhfjh@gmail.com";
///kodecamp/i

// validate the mail 
$noOfMatches = preg_match_all("/^[a-z]+@[a-z]+(.com|.net|.in)$/", $text, $matchedString);
 echo "no of matched :".$noOfMatches.PHP_EOL;
 
 print_r($matchedString);

