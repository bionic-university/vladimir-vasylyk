<?php
/**
 *  Test some methods of Book class
 */
namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\Tests;

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\Book;

/**
 * Class BookTest
 *
 * @package BionicUniversity\VodymyrVasylyk\HW3\Translator\Tests
 */
class BookTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers getTitle() function
     */
    public function testGetTitle()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $someTitle = "SomeTitle";
        $this->assertEquals($someTitle, $bookObj->getTitle());
    }
    /**
     * @covers setTitle() function
     */
    public function testSetTitle()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $otherTitle = "OtherTitle";
        $bookObj->setTitle($otherTitle);
        $this->assertEquals($otherTitle, $bookObj->getTitle());
    }
}