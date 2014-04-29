<?php
$str = "Input any string of characters:";

$length = strlen($str);

$result = array();

for ($pos = 0; $pos < $length; $pos++) {

 if (isset($result[$str[$pos]])) {

  $result[$str[$pos]]++;

  continue;

 }

 $result[$str[$pos]] = 1;

}



var_dump($result);
