<?php
$a = array("и"=>"Информатика", 
           "м"=>"Математика");
$b = array("м"=>"Математика", 
           "и"=>"Информатика");
if ($a == $b) echo "Массивы равны и";
  else echo "Массивы НЕ равны и ";
if ($a === $b) echo " эквивалентны";
  else echo " НЕ эквивалентны \n";

echo "new change 1 \n";

echo "new change 2, in branch v0.1\n";
// получим echo "Массивы равны и НЕ эквивалентны"
?>
//new change 1
