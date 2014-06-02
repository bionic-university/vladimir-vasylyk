<?php
/**
 *  Test some methods of Book class
 */
namespace BionicUniversity\VolodymyrVasylyk\HW3\Tests;

use BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses\Book;

/**
 * Class BookTest
 *
 * @package BionicUniversity\VodymyrVasylyk\HW3\Tests
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

    public function testGetAuthor()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $author = "SomeAuthor";
        $this->assertEquals($author, $bookObj->getAuthor());
    }

    public function testSetAuthor()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setAuthor("OtherAuthor");
        $author = "OtherAuthor";
        $this->assertEquals($author, $bookObj->author);
    }

    public function testGetCover()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setCover("soft");
        $cover = "soft";
        $this->assertEquals($cover, $bookObj->getCover());
    }

    public function testSetCover()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setCover("soft");
        $cover = "soft";
        $this->assertEquals($cover, $bookObj->cover);
    }

    public function testIsHavePictures()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setHavePictures(true);
        $pic = true;
        $this->assertEquals($pic, $bookObj->isHavePictures());
    }

    public function testSetHavePictures()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setHavePictures(true);
        $pic = true;
        $this->assertEquals($pic, $bookObj->havePictures);
    }

    public function testGetLanguage()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setLanguage("Spanish");
        $lang = "Spanish";
        $this->assertEquals($lang, $bookObj->getLanguage());
    }

    public function testSetLanguage()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setLanguage("Spanish");
        $lang = "Spanish";
        $this->assertEquals($lang, $bookObj->getLanguage());
    }
}