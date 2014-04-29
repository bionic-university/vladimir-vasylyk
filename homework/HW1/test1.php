<?php

$str = "Input any string of characters:";

$start = microtime(true);

$length = strlen($str);

$result = array();

for ($pos = 0; $pos < $length; $pos++) {

 if (isset($result[$str[$pos]])) {

  $result[$str[$pos]]++;

  continue;

 }

 $result[$str[$pos]] = 1;

}

$time = microtime(true) - $start;

printf('time: %.5F сек.', $time);
echo "\n";
