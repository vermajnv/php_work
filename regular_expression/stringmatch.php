<?php

$text = <<<TEXT
this is an online programming Plateform called kodecmp or kodecamp.#$%
kodec@m kodecaa@mp^
TEXT;

$noCounter = strlen($text);
echo "total no. of char : ".$noCounter.PHP_EOL;

$noOfMatches = preg_match_all("/(kode)c[a@]*mp?/", $text, $matchedString);
echo "no of matches :".$noOfMatches.PHP_EOL;
echo " matched string :".PHP_EOL;
print_r($matchedString);
echo PHP_EOL;

