<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

trait LanguageTrait
{
    /**
     * @var string
     */
    protected $language;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

}
