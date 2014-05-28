<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

class Collection extends \ArrayObject
{
    /**
     * @var AbstractMedia[]
     */
//    public $mediaCollection;
//
//    public function __construct()
//    {
//        $this->mediaCollection = new \ArrayObject();
//    }

    /**
     * @param array of $element
     */
    public function addElement($element)
    {
        //$this->mediaCollection[] = $element;
        $this->append($element);

    }

    /**
     * @param $knownLanguages array()
     */
    public function Translate($knownLanguages)
    {
//        foreach ($this->mediaCollection as $element) {
//            if (in_array($element->getLanguage(), (array)$knownLanguages)) {
//                $a = new \ReflectionClass($element);
//                $result = $a->getName() . " " . $element->getTitle();
//                $result = $result . " will be translated from " . $element->getLanguage() . PHP_EOL;
//                echo $result;
//            }
//        }
        foreach ((array)$this as $element) {
            if (in_array($element->getLanguage(), (array)$knownLanguages)) {
                $a = new \ReflectionClass($element);
                $result = $a->getName() . " " . $element->getTitle();
                $result = $result . " will be translated from " . $element->getLanguage() . PHP_EOL;
                echo $result;
            }
        }


    }

    public function checkLanguage($element)
    {
        $result = false;
        if (!$element->getLanguage()) {
            echo "Language is not set. Please set language for {$element->getTitle()}";
        } else {
            $result = true;
        }

        return $result;
    }

}
