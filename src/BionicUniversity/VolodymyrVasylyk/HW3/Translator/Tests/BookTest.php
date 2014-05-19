<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\Tests;

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Book;


class BookTest extends \PHPUnit_Framework_TestCase
{
    public function TestGetTitle()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle"); //Book("SomeAuthor", "SomeTitle");
        $someAuthor = "SomeAuthor";
        $this->assertEquals($someAuthor, $bookObj->getTitle());
    }

    public function TestSetTitle()
    {
        $bookObj = new Book("someAuthor", "someTitle");
        $otherTitle = "otherTitle";
        $bookObj->setTitle("otherTitle");
        $this->assertEquals($otherTitle, $bookObj->getTitle());
    }
}
 