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

    /**
     * @covers getAuthor() function
     */
    public function testGetAuthor()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $author = "SomeAuthor";
        $this->assertEquals($author, $bookObj->getAuthor());
    }

    /**
     * @covers setAuthor() function
     */
    public function testSetAuthor()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setAuthor("OtherAuthor");
        $author = "OtherAuthor";
        $this->assertEquals($author, $bookObj->author);
    }

    /**
     * @covers getCover() function
     */
    public function testGetCover()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setCover("soft");
        $cover = "soft";
        $this->assertEquals($cover, $bookObj->getCover());
    }

    /**
     * @covers setCover() function
     */
    public function testSetCover()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setCover("soft");
        $cover = "soft";
        $this->assertEquals($cover, $bookObj->cover);
    }

    /**
     * @covers isHavePictures() function
     */
    public function testIsHavePictures()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setHavePictures(true);
        $pic = true;
        $this->assertEquals($pic, $bookObj->isHavePictures());
    }

    /**
     * @covers setHavePictures() function
     */
    public function testSetHavePictures()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setHavePictures(true);
        $pic = true;
        $this->assertEquals($pic, $bookObj->havePictures);
    }

    /**
     * @covers getLanguage() function
     */
    public function testGetLanguage()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setLanguage("Spanish");
        $lang = "Spanish";
        $this->assertEquals($lang, $bookObj->getLanguage());
    }

    /**
     * @covers setLanguage() function
     */
    public function testSetLanguage()
    {
        $bookObj = new Book("SomeAuthor", "SomeTitle");
        $bookObj->setLanguage("Spanish");
        $lang = "Spanish";
        $this->assertEquals($lang, $bookObj->language);
    }
}