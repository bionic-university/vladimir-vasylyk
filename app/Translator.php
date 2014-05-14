<?php
require __DIR__ . '/../bootstrap.php';

//include_once "../src/BionicUniversity/VolodymyrVasylyk/HW3/Translator/src/init.php";
use BionicUniversity/VolodymyrVasylyk / HW3 / Translator / src / init;

init();

$langArray = array();

/*
 * prompting for language that interpreter knows
 */
echo "Please input language known by interpreter (English, Spanish, German etc.)\n";
$language = trim(fgets(STDIN));
InputLangCheck($language, $LangSet);

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
        InputLangCheck($language, $LangSet);
        echo $promptNewLang;
    } elseif ("N" == $choice) {
        $check = true;
    } else {
        echo $promptNewLang;
    }
}
/*
 * Translating according to inputted languages
 */
$myCollection->Translate($langArray);

/*
 * Checking if user entered correct language
 */
function InputLangCheck($language, $LangSet)
{
    global $langArray;
    while (!in_array($language, $LangSet)) {
        echo "Please, enter correct language\n";
        $language = trim(fgets(STDIN));
    }
    $langArray[] = $language;
}
