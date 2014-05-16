<?php

namespace BionicUniversity\VolodymyrVasylyk\ExamReDo\Variant2;

class Resizer extends AbstractResizer implements ImageInterface
{

    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
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
        echo "Thumbnail was made" . PHP_EOL;
        return true;
    }

    public function Orientation()
    {
        return $this->getHeight() > $this->getWidth();
    }

    /**
     * @return array
     */
    public function GetCenter()
    {
        $centY = $this->getHeight() / 2;
        $centX = $this->getWidth() / 2;
        return [$centX, $centY];
    }

    /**
     * @return array TopUp coordinates
     */
    public function GetNewUpCoors()
    {
        if ($this->Orientation()) {
            $newUpX = 0;
            $newUpY = $this->GetCenter()[1] - $this->getWidth() / 2;
        } else {
            $newUpX = $this->GetCenter()[0] - $this->getHeight() / 2;
            $newUpY = 0;
        }
        return [$newUpX, $newUpY];
    }

    public function GetNewDownCoors()
    {
        if ($this->Orientation()) {
            $newDownX = $this->getWidth();
            $newDownY = $this->GetCenter()[1] + $this->getWidth() / 2;
        } else {
            $newDownX = $this->GetCenter()[0] + $this->getHeight() / 2;
            $newDownY = $this->getHeight();
        }
        return [$newDownX, $newDownY];
    }

    public function ResizePicture()
    {
        $newSize = $this->GetNewDownCoors()[0] - $this->GetNewUpCoors()[0];
        echo "ReDrawing picture with new size " . $newSize . "x" . $newSize . " pixels";
        $this->setWidth($newSize);
        $this->setHeight($newSize);
    }
}