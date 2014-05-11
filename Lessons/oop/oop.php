<?php
include 'classes/AbstractCircle.php';
include 'classes/Circle.php';

$frontcircle  = new Circle('black', 'metal', 12.5);
echo $frontcircle->radius;
$frontcircle->radius = 3.5;
//var_dump($frontcircle);

$backcircle = new Circle('black', 'metal', 3.5);

$backcircle->setRadius(12.5);
//var_dump($backcircle);

echo $backcircle->getRadius();
