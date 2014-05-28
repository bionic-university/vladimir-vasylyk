<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\LanguageInterface;

/**
 * Class AbstractMedia
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses
 */
abstract class AbstractMedia
{
    /**
     * @var
     */
    protected $title;

    /**
     * @var
     */
    protected $language;

    /**
     * @return mixed
     */
    abstract public function reviewInformation();

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}


