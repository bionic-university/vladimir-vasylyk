<?php

//namespace src\BionicUniversity\VolodymyrVasylyk\HW3\Translator;

require __DIR__ . '/../bootstrap.php';

//include_once '../src/BionicUniversity/VolodymyrVasylyk/HW3/Translator/initial.php';
//
//Initialisation();

$LangSet = ["English", "Spanish", "German", "France", "Italian", "Portuguese", "Swedish", "Norwegian"];
$Languages = new ArrayObject($LangSet);
$knownLanguages = new ArrayObject();
/*
 * prompting for language that interpreter knows
 */
echo "Please input language known by interpreter (English, Spanish, German etc.)\n";
$language = trim(fgets(STDIN));
InputLangCheck($language, $Languages);
/*
 * Asking about other languages
 */
$promptNewLang = "Add another language? Y/N: ";
echo $promptNewLang;
$check = false; // flag to exit from loop
while (!$check) {
    $choice = trim(fgets(STDIN));
    if ("Y" == $choice) {
        echo "Enter new language: ";
        $language = trim(fgets(STDIN));
        InputLangCheck($language, $Languages);
        echo $promptNewLang;
    } elseif ("N" == $choice) {
        $check = true;
    } else {
        echo $promptNewLang;
    }
}
/*
 * Checking if user entered correct language
 */
function InputLangCheck($language, $Languages)
{
    global $knownLanguages;
    while (!in_array($language, (array)$Languages)) {
        echo "Please, enter correct language\n";
        $language = trim(fgets(STDIN));
    }
    $knownLanguages->append($language);
}