<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

class Collection extends \ArrayObject
{
//    /**
//     * @var array
//     */
//    public $mediaCollection;
//
//    public function __construct()
//    {
//        $this->collection = array();
//    }


//TODO implement this method
//    /**
//     * @return mixed
//     */
//    public function getElement()
//    {
//        return $this->;
//    }

    /**
     * @param array of $element
     */
    public function addElement($element)
    {
        $this->append($element);

    }

    /**
     * @param $langArray array()
     */
    public function Translate($langArray)
    {
        foreach ($this->collection as $element) {
            if (in_array($element->getLanguage(), $langArray)) {
                //echo "{$element->getDirector()} Translated.\n";
                $a = new ReflectionClass($element);
                //var_dump($a->getName());
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
