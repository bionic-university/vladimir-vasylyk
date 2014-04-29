<?php

abstract class AbstractHome
{
    /**
     * @var int
     */
    protected  $doors;
    /**
     * @var int
     */
    protected  $windows;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var int
     */
    protected $width;

    function __construct($doors, $windows, $length, $width)
    {
        $this->doors = $doors;
        $this->windows = $windows;
        $this->length = $length;
        $this->width = $width;
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

    public function GetSquare()
    {
        return $this->length * $this->width;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param boolean $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
} 