<?php
require __DIR__ . '/../bootstrap.php';


include "BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses/AbstractHome.php";
include "BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses/Home.php";

$firstHome = new Home(2, 'grey');
echo "First home square is " . $firstHome->GetSquare() . " sq.m." . PHP_EOL;

echo "First home is " . $firstHome->getColour() . PHP_EOL;

$firstHome->setColour('yellow');
echo "After reconstruction first home is " . $firstHome->getColour() . PHP_EOL;

$firstHome->checkInhabitants();






