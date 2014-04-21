
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
   // echo $line{$k} . "\n";

    //print($line . "\n");
}
$unique_char = array_unique($arr_char);
$unique_char = array_values($unique_char);

//print_r($arr_char);

print_r($unique_char);
$counter = 0; //variable to count characters
foreach($unique_char as $val){
    echo "new char " . $val . "\n";
    for($i=0;$i<$argc;$i++){
        if ($val == $arr_char[$i]){
            //echo "Symbol!!!";
            $counter++;
            echo "Counter " . $counter . "\n";
        }
    }
    echo "Symbol '{$val}' presented in the input line " . $counter . " times\n";
    $counter=0; //resetting counter
}