<?php
echo "Input any string of characters:\n";

$line = fgets(STDIN);

$start = microtime(true);

$length = strlen($line);
$result = array();
for ($pos = 0; $pos < $length; $pos++)
{
 if (array_key_exists($line[$pos], $result))
 {
     $result[$line[$pos]]++;
 }
else $result[$line[$pos]] = 1;
}

$time = microtime(true) - $start;
printf('time: %.5F сек.', $time);
echo "\n";

//foreach ($result as $k => $val) {
//    echo "Symbol '{$k}' is {$val} times in the input string\n";
//}
//echo "Input string length is " . strlen($line) . " characters\n";
//echo "This script processed " . array_sum($result) . " characters\n";

