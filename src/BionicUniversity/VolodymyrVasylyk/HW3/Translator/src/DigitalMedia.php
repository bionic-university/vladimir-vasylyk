<?php


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
     * @param $bitrate
     * @param $lenght
     */
    public function __construct($bitrate, $lenght)
    {
        $this->bitrate = $bitrate;
        $this->length = $lenght;

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

    public function reviewInformation()
    {
        $this->play();
        echo "Producing sound in speakers";

    }

    public function play()
    {
        echo "Paying selected file";
    }
} 