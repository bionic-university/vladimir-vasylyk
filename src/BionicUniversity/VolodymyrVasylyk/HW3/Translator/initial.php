<?php

function Initialisation()
{
    global $LangSet;
    //var_dump(true);
    $LangSet = ["English", "Spanish", "German", "France", "Italian", "Portuguese", "Swedish", "Norwegian"];

    global $myCollection, $fantomas, $avatar, $HugoBook, $GoetheBook, $MarkesBook, $RemarkBook, $MensHealth, $Elle;
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
}
