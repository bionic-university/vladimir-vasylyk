<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

trait YearTrait
{
    /**
     * @var int
     */
    protected $issueYear;

    /**
     * @return int
     */
    public function getIssueYear()
    {
        return $this->issueYear;
    }

    /**
     * @param int $issueYear
     */
    public function setIssueYear($issueYear)
    {
        $this->issueYear = $issueYear;
    }

} 