<?php

namespace BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses;

/**
 * Class AbstractHome
 */
/**
 * Class AbstractHome
 * @package BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses
 */
abstract class AbstractHome
{
    /**
     * @var int
     */
    protected $doors;
    /**
     * @var int
     */
    protected $windows;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var int
     */
    protected $width;

//    /**
//     * @param int $doors
//     * @param int $windows
//     * @param string $length
//     * @param int $width
//     */
//    public function __construct($doors, $windows, $length, $width)
//    {
//        $this->doors = $doors;
//        $this->windows = $windows;
//        $this->length = $length;
//        $this->width = $width;
//    }

    /**
     * @param string $name
     *
     * @return null
     */
    function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }


    /**
     * @return int
     */
    public function getNumberOfWindows()
    {
        return $this->windows;
    }

    /**
     * @return int
     */
    public function getNumberOfDoors()
    {
        return $this->doors;
    }

    /**
     * @return int
     */
    public function GetSquare()
    {
        return $this->length * $this->width;
    }

    /**
     * @param int $doors
     */
    public function setNumberOfDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * @param int $windows
     */
    public function setNumberOfWindows($windows)
    {
        $this->windows = $windows;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }


} 