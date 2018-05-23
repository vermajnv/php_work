<?php

$text = <<<TEXT
this is an online programming plateform called kodec@mp or kodecamp.#$%
^
TEXT;

$noCounter = strlen($text);
echo "total no. of char : ".$noCounter.PHP_EOL;

$noOfMatches = preg_match_all("/[^oe]/", $text, $matchedString);
echo "no of matches :".$noOfMatches.PHP_EOL;
echo " matched string :".PHP_EOL;
print_r($matchedString);
echo PHP_EOL;
