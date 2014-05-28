<?php

require __DIR__ . '/../bootstrap.php';

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Book;
use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Collection;
use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Movie;
use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\AudioBook;
use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Magazine;

$LangSet = ["English", "Spanish", "German", "France", "Italian", "Portuguese", "Swedish", "Norwegian"];
$Languages = new ArrayObject($LangSet);
$knownLanguages = new ArrayObject();

$myCollection = new Collection();
/*
 * Adding 2 movies
 */
$avatar = new Movie("Avatar", "James Cameron");
$fantomas = new Movie("Fantomas", "Andre Hunebelle");
$avatar->setLanguage("English");
$fantomas->setLanguage("France");

/*
 * Adding two paper books
 */
$HugoBook = new Book("Victor Marie Hugo", "Les Misérables");
$GoetheBook = new Book("Johann Wolfgang von Goethe", "Faust");
$HugoBook->setLanguage("France");
$GoetheBook->setLanguage("German");

/*
 * Adding two AudioBooks
 */
$RemarkBook = new AudioBook("Erich Maria Remarque", "Drei Kameraden");
$MarkesBook = new AudioBook("Gabriel García Márquez", "Cien años de soledad");
$RemarkBook->setLanguage("German");
$MarkesBook->setLanguage("Spanish");

/*
 * Adding two Magazines
 */
$MensHealth = new Magazine("Men's Health", "Men's, Sport, Fitness");
$Elle = new Magazine("Elle", "Fashion, Woman's");
$MensHealth->setLanguage("English");
$Elle->setLanguage("France");

/*
 * Adding elements to collection
 */
$myCollection->addElement($avatar);
$myCollection->addElement($fantomas);
$myCollection->addElement($HugoBook);
$myCollection->addElement($GoetheBook);
$myCollection->addElement($RemarkBook);
$myCollection->addElement($MarkesBook);
$myCollection->addElement($MensHealth);
$myCollection->addElement($Elle);

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
//
//var_dump($knownLanguages);
//var_dump($myCollection);
//die;

$myCollection->Translate($knownLanguages);

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