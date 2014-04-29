<?php
/**
 * Created by PhpStorm.
 * User: dluck
 * Date: 4/23/14
 * Time: 7:38 PM
 */

$number = 1234;

if (true) {

} elseif (true) {

} else {

};



switch ($number) {
    case '12':
        echo 12;
        break;
    case 1234:
        echo 'Bingo';
        break;
    default:
        echo 'No number';
}

if (2014 === date('Y')) {
    echo 'Hello from current year';
} else {
    echo 'Hello from past';
}

echo (2014 === date('Y')) ? 'Hello from current year' : 'Hello from past';

// cycles

while (true) {
   break;
}

for ($i = 0; $i < 100; $i++) {

}

foreach(array(1, 2) as $element) {

}
do {

} while (false);