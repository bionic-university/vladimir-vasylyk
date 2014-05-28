<?php

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/MediaClasses');

spl_autoload_register(
    function ($className) {
        require_once(str_replace("\\", "/", $className) . ".php");
    }
);

//include_once 'initial.php';
//
//Initialisation();

//$langArray = array();
//
//$LangSet = ["English", "Spanish", "German", "France", "Italian", "Portuguese", "Swedish", "Norwegian"];

//// prompting for language that interpreter knows
//echo "Please input language known by interpreter (English, Spanish, German etc.)\n";
//$language = trim(fgets(STDIN));
//InputLangCheck($language, $LangSet);
//
///*
// * Asking about other languages
// */
//$promptNewLang = "Add another language? Y/N: ";
//echo $promptNewLang;
//$check = false; // flag to exit from loop
//while (!$check) {
//    $choice = trim(fgets(STDIN));
//    if ("Y" == $choice) {
//        echo "Enter new language: ";
//        $language = trim(fgets(STDIN));
//        InputLangCheck($language, $LangSet);
//        echo $promptNewLang;
//    } elseif ("N" == $choice) {
//        $check = true;
//    } else {
//        echo $promptNewLang;
//    }
//}
//
///*
// * Translating according to inputted languages
// *
// */
//$myCollection->Translate($langArray);
//
///**
// * Checking if user entered correct language
// * @param $language
// * @param $LangSet
// */
//function InputLangCheck($language, $LangSet)
//{
//    global $langArray;
//    while (!in_array($language, $LangSet)) {
//        echo "Please, enter correct language\n";
//        $language = trim(fgets(STDIN));
//    }
//    $langArray[] = $language;
//}

$langObj = new \BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Languages();

var_dump($langObj);