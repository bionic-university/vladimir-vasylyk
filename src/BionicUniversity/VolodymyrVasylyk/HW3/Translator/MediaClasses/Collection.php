<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

class Collection
{
    /**
     * @var array
     */
    public $collection;

    public function __construct()
    {
        $this->collection = array();
    }

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->collection;
    }

    /**
     * @param array of $element
     */
    public function addElement($element)
    {
        $this->collection[] = $element;

    }

    /**
     * @param $langArray array()
     */
    public function Translate($langArray)
    {
        //$iterator = $this->collection->getIterator();
//        while ($iterator->valid())
//            echo $iterator->current();
//            //echo $iterator->current()->getLanguage();
//            if (in_array($iterator->current()->getlanguage(), $langArray)){
//                echo "Translated!\n";
//            };
        //var_dump($collection);
        //$result = '';

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