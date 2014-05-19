<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\Tests;

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Book;


class BookTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTitle()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle"); //Book("SomeAuthor", "SomeTitle");
        $someTitle = "SomeTitle";
        $this->assertEquals($someTitle, $bookObj->getTitle());
    }

    public function testSetTitle()
    {
        $bookObj = new Book("someAuthor", "someTitle");
        //$neee = new
        $otherTitle = "otherTitle";
        $bookObj->setTitle("otherTitle");
        $this->assertEquals($otherTitle, $bookObj->getTitle());
    }
}
 