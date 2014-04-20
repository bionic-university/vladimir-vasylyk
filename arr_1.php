//example 1 from book

<?php //defining new element number
$del_items = array("10"=>"Наука и жизнь",
   "12"=>"Информатика");
$del_items[13] = "Программирование на Php"; //new element w/ number
 
$del_items[] = "New book";  //new element w/o number


foreach ($del_items as $k => $val)
{
   echo "Book # $k is " . $val . "\n";
}

?>

