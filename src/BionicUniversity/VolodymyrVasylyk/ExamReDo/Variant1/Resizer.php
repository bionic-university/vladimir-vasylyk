<?php

namespace BionicUniversity\VolodymyrVasylyk\ExamReDo\Variant1;

class Resizer extends AbstractResizer implements ImageInterface
{

    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->widht = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    public function Thumbnail()
    {
        echo "thumbnail" . PHP_EOL;
    }

    /**
     * @return array
     * @
     */
    public function GetNewStart()
    {
        if ($this->getHeight() < $this->getWidth()) {
            $newX = $this->getWidth() - (($this->getWidth() - $this->getHeight()) / 2);
            $newStart = [$newX, 0];
        } else {
            $newY = $this->getHeight() - (($this->getHeight() - $this->getWidth()) / 2);
            $newStart = [0, $newY];
        }
        return $newStart;
    }

    public function GetDownCoordinates()
    {
        if ($this->Orientation()) {
            $downY = $this->GetNewStart()[1] + $this->getWidth();
            $downX = $this->getWidth();
        } else {
            $downY = $this->getHeight();
            $downX = $this->GetNewStart()[0] + $this->getHeight();
        }
        return [$downX, $downY];
    }

    public function Orientation()
    {
        return $this->getHeight() > $this->getWidth();
    }

    public function RedrawPicture()
    {
        $topLeft = $this->GetNewStart()[0] . ":" . $this->GetNewStart()[1];
        $downRight = $this->GetDownCoordinates()[0] . ":" . $this->GetDownCoordinates()[1];
        echo "New picture from " . $topLeft . " to " . $downRight . PHP_EOL;
    }


}