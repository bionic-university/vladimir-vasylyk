<?php

use BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses\LanguageInterface;

abstract class AbstractMedia implements LanguageInterface
{
    public $title;

    protected $language;
    abstract public function reviewInformation();

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
} 