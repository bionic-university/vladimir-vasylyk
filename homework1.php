
<?php

$line = "";
if ($argc < 2) {
    echo "Использование: php homework1.php [line of text].\n";
    exit();
} else { //allowing " "[SPACE] symbols to be present in [line of text]
        for ($i = 1; $i < $argc; $i++) {

            $line = $line . " " . $argv[$i];
        }
}

for($k=0; $k < strlen($line);$k++)
{
    $arr_char[] = $line{$k};
}
$unique_char = array_unique($arr_char);
$unique_char = array_values($unique_char);

//print_r($arr_char);

//print_r($unique_char);
$counter = 0; //variable to count characters
$total_char = 0;
foreach($unique_char as $val){
    //echo "Current character " . "{$val}\n";
    for($i=0;$i<count($arr_char);$i++){
        if ($val == $arr_char[$i]){
            //echo "Symbol!!!";
            $counter++;
            //echo "Counter " . $counter . "\n";
        }
    }
    echo "Symbol '{$val}' presented in the input line " . $counter . " times\n";
    $total_char += $counter;
    $counter=0; //resetting counter
}

echo "Input string length is  " . strlen($line) . " characters\n";
echo "Output string length is " . $total_char . " characters\n";

if (strlen($line) == $total_char){
    echo "Profit! :)\n";
} else {
    echo "Oh noooo, not working again\n";
}