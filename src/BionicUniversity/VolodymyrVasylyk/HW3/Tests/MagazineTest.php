<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Tests;

use BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses\Magazine;

/**
 * Class MagazineTest
 *
 * @package BionicUniversity\VodymyrVasylyk\HW3\Tests
 */
class MagazineTest extends \PHPUnit_Framework_TestCase
{
    public function testGetGenre()
    {
        $magazineObj = new Magazine("SomeTitle", "SomeGenre");
        //$magazineObj->setGenre("Spanish");
        $genre = "SomeGenre";
        $this->assertEquals($genre, $magazineObj->getGenre());
    }

    public function testSetGenre()
    {
        $magazineObj = new Magazine("SomeTitle", "SomeGenre");
        $magazineObj->setGenre("OtherGenre");
        $lang = "OtherGenre";
        $this->assertEquals($lang, $magazineObj->genre);
    }
}