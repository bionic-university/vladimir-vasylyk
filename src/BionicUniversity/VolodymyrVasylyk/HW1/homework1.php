<?php

echo "Input any string of characters:\n";
$line = fgets(STDIN);

for ($k = 0; $k < strlen($line); $k++) {
    $arrChar[] = $line{$k};
}

//<<<<<<< HEAD

$uniqueChar = array_unique($arrChar); //creating array w/uniauq values
$uniqueChar = array_values($uniqueChar); //reindexing array w/ unique values

/*=======
$unique_char = array_unique($arr_char); //creating array w/ unique values
$unique_char = array_values($unique_char); //reindexing array w/ unique values

//adding new comment to see how it will be merged

>>>>>>> v0.2*/
$counter = 0; //variable to count characters
$totalChar = 0;

// for each character in unique array counting number of character in input string
foreach ($uniqueChar as $val) {
    for ($i = 0; $i < count($arrChar); $i++) {
        if ($val == $arrChar[$i]) {
            $counter++;
        }
    }
    echo "Symbol '{$val}' presented in the input line " . $counter . " times\n";
    $totalChar += $counter;
    $counter = 0; //resetting counter
}

//echo "Input string length is " . strlen($line) . " characters\n";
//echo "This script processed  " . $total_char . " characters\n";
//
//if (strlen($line) == $total_char){
//    echo "Profit! :)\n";
//} else {
//    echo "Oh noooo, not working again\n";
//}