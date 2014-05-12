<?php

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/src');

spl_autoload_register(
    function ($className) {
        require_once(str_replace("\\", "/", $className) . ".php");
    }
);

//$bookObj = new Book("Karnegi", "soft");
//
//$movieObj = new Movie("Cameron");
//
//$magazineObj = new Magazine("politics", true); //doesn't set true to isColour parameter
////var_dump($magazineObj);
//
//
//$audioBookObj = new AudioBook("Sam", []);
////var_dump(@$audioBookObj);

$langArray = array();
$myCollection = new Collection();
$avatar = new Movie("Avatar", "James Cameron");
$fantomas = new Movie("Fantomas", "Andre Hunebelle");
$avatar->setLanguage("English");
$fantomas->setLanguage("France");
$myCollection->addElement($avatar);
$myCollection->addElement($fantomas);
//$langArray = ["English", "France"];
//$myCollection->TranslateElement($langArray);


$LangSet = ["English", "Spanish", "German", "France", "Italian", "Portuguese", "Swedish", "Norwegian"];

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
//var_dump($myCollection);

var_dump($langArray);

/*
 * Checking if user entered correct language
 */
$myCollection->Translate($langArray);

function InputLangCheck($language, $LangSet)
{
    global $langArray;
    while (!in_array($language, $LangSet)) {
        echo "Please, enter correct language\n";
        $language = trim(fgets(STDIN));
    }
    $langArray[] = $language;
}
