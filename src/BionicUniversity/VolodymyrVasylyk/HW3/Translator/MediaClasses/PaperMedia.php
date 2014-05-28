<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

/**
 * Class PaperMedia
 * @package BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses
 *
 */
class PaperMedia extends AbstractMedia
{
    /**
     * @var int
     */
    protected $numPages;
    /**
     * @var string
     */
    protected $paperFormat;

    /**
     * @param $numPages
     * @param $paperFormat
     */
    public function __construct($numPages, $paperFormat)
    {
        $this->numPages = $numPages;
        $this->paperFormat = $paperFormat;
    }

    /**
     * @return int
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    /**
     * @param int $numPages
     */
    public function setNumPages($numPages)
    {
        $this->numPages = $numPages;
    }

    /**
     * @return string
     */
    public function getPaperFormat()
    {
        return $this->paperFormat;
    }

    /**
     * @param string $paperFormat
     */
    public function setPaperFormat($paperFormat)
    {
        $this->paperFormat = $paperFormat;
    }

    /**
     * returns recension
     * @return string
     */
    public function reviewInformation()
    {
        //$result = '';
        $readiness = rand(0, 10);
        (5 < $readiness) ? $result = "Ready to publish" : $result = "To be reworked";

        return $result;
    }
}
