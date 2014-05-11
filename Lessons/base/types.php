<?php

//Scalar types

$integer = 1;
$floet = 11.60;
$string = 'Some string';
$bolean = false;

$null = null;

$resourse = fopen('.gitignore', 'r');

$array = array(); //usual array
$assocArray = array('apple' => array('green' => 'kiwi', 'orange' => array()));

$object = new stdClass();
$callableObject = function(){
};



//non scalar types

$array = [1, 2, 3, 4];

$arrayObject = new ArrayObject($array);




