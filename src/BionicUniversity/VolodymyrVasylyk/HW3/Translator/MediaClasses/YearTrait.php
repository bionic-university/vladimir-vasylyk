<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

trait YearTrait
{
    /**
     * @var int
     */
    protected $Year;

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * @param int $Year
     */
    public function setIssueYear($Year)
    {
        $this->Year = $Year;
    }

}
