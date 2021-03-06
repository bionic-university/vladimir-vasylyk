<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses;

/**
 * Class DigitalMedia
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses
 *
 */
class DigitalMedia extends AbstractMedia
{
    /**
     * @var int
     */
    protected $bitrate;
    /**
     * @var string
     */
    protected $length;


    /**
     * @param string $bitrate
     * @param int    $length
     */
    public function __construct($bitrate, $length)
    {
        $this->bitrate = $bitrate;
        $this->length = $length;

    }

    /**
     * @return int
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @param int $bitrate
     */
    public function setBitrate($bitrate)
    {
        $this->bitrate = $bitrate;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * representing some information
     */
    public function reviewInformation()
    {
        $this->play();
        echo "Producing sound in speakers";

    }

    /**
     * Launching play
     */
    public function play()
    {
        echo "Paying selected file";
    }
}
