<?php

namespace BionicUniversity\VolodymyrVasylyk\MidtermExam;

class Resizer extends AbstractResizer implements ImageInterface
{

    public $height;
    public $width;

    public function __construct($height, $widht)
    {
        $this->height = $height;
        $this->widht = $widht;
    }

    public function GetCenter()
    {
        return [$this->getWidht() / 2, $this->getHeight() / 2];
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param $CoordsOfCenter
     * @return array
     */
    public function CropPicture($CoordsOfCenter)
    {

        if ($this->getWidht() > $this->getHeight()) {
            $newTopLeft = $CoordsOfCenter[0] - $this->GetCenter()[1];
            $newDownRight = $CoordsOfCenter[0] + $this->getHeight()[1];
            $coords = [$newTopLeft, 0, $newDownRight, 0];
        } else {
            $newTopLeft = $CoordsOfCenter[1] - $this->GetCenter()[0];
            $newDownRight = $CoordsOfCenter[1] + $this->GetCenter()[0];
            $coords = [0, $newTopLeft, 0, $newDownRight];
        }
        return $coords;
    }

    public function RedrawImage($coords)
    {
        "";
    }

    public function Thumbnail()
    {
        echo "thumbnail" . PHP_EOL;
    }
}