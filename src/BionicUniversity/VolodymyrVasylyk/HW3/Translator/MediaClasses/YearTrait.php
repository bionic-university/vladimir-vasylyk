<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

/**
 * Class YearTrait
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses
 *
 */
trait YearTrait
{
    /**
     * @var int
     */
    protected $year;

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

}
