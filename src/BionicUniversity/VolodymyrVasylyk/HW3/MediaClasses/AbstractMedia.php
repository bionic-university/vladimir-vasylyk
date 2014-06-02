<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses;

use BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses\LanguageInterface;

/**
 * Class AbstractMedia
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses
 *
 */
abstract class AbstractMedia
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
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

    function __get($name)
    {
        return isset($this->$name) ? $this->$name : NULL;
    }

    /**
     * @param string $language
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


