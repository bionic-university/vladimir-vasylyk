<?php

namespace BionicUniversity\VolodymyrVasylyk\HW2\Tests;

Use BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses\Home;

/**
 * Class HomeTest
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW2\Tests
 *
 */
class HomeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers GetNumberOfWindows() function
     */
    public function testGetNumberOfWindows()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setNumberOfWindows(2);
        $windows = 2;
        $this->assertEquals($windows, $homeObj->getNumberOfWindows());
    }

    /**
     * @covers SetNumberOfWindows() function
     */
    public function testSetNumberOfWindows()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setNumberOfWindows(2);
        $numWindows = 2;
        $this->assertEquals($numWindows, $homeObj->windows);
    }

    /**
     * @covers GetColour() function
     */
    public function testGetColour()
    {
        $homeObj = new Home(2, "red");
        $varColour = "red";
        $this->assertEquals($varColour, $homeObj->colour);
    }

    /**
     * @covers SetColour() function
     */
    public function testSetColour()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setColour("black");
        $newColour = "black";
        $this->assertEquals($newColour, $homeObj->colour);
    }

    /**
     * @covers setNumberOfDoors() function
     */
    public function testGetNumberOfDoors()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setNumberOfDoors(5);
        $numDoors = 5;
        $this->assertEquals($numDoors, $homeObj->getNumberOfDoors());
    }

    /**
     * @covers setNumberOfDoors() function
     */
    public function testSetNumberOfDoors()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setNumberOfDoors(5);
        $numDoors = 5;
        $this->assertEquals($numDoors, $homeObj->doors);
    }

    /**
     * @covers getSquare() function
     */
    public function testGetSquare()
    {
        $homeObj = new Home(2, "red");
        $square = 25;
        $homeObj->setLength(5);
        $homeObj->setWidth(5);
        $this->assertEquals($square, $homeObj->GetSquare());
    }

    /**
     * @covers getLength() function
     */
    public function testGetLength()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setLength(10);
        $length = 10;
        $this->assertEquals($length, $homeObj->getLength());
    }

    /**
     * @covers setLength() function
     */
    public function testSetLength()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setLength(10);
        $length = 10;
        $this->assertEquals($length, $homeObj->length);
    }

    /**
     * @covers getWidths() function
     */
    public function testGetWidth()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setWidth(10);
        $width = 10;
        $this->assertEquals($width, $homeObj->getWidth());
    }

    /**
     * @covers setWidths() function
     */
    public function testSetWidth()
    {
        $homeObj = new Home(2, "red");
        $homeObj->setWidth(10);
        $width = 10;
        $this->assertEquals($width, $homeObj->width);
    }

    /**
     * @covers checkinhabitants() function
     */
    public function testCheckinhabitants()
    {
        $homeObj = new Home(2, "red");
        $homeObj->addInhabitant("John");
        $isPeopleHere = true;
        $this->assertEquals($isPeopleHere, $homeObj->checkInhabitants());
    }

}