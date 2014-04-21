
<?php
if ($argc != 2) {
    echo "Использование: php homework1.php [line of text].\n";
    exit();
}
$line = $argv[1];

for($k=0; $k < strlen($line);$k++)
{
    echo $line{$k} . "\n";
    //print($line . "\n");
}