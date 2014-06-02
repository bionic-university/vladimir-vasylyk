<?php

//include "classes/AbstractHome.php";
//include "HomeClasses/human.php";

namespace BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses;

/**
 * Class home
 */
/**
 * Class Home
 * @package BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses
 */
class Home extends AbstractHome
{
    /**
     * @var int
     */
    protected $floors;
    /**
     * @var string
     */
    protected $colour;

    //  protected $isForSale;

    /**
     * @var Human
     */
    protected $people;


    /**
     * @param int $floors
     * @param int $colour
     */
    public function __construct($floors, $colour)
    {
        $this->floors = $floors;
        $this->colour = $colour;
        $this->people = new \ArrayObject(); //new Human(1, 2, 'tall', 2);
        // $this->$isForSale = true;
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @param string $name
     */
    public function addInhabitant($name)
    {
        $this->people->append(new Human($name));
    }
    /**
     * People live here
     *
     * @return boolean
     */
    public function checkInhabitants()
    {
        $result = false;
        if ($this->people){
            $result = true;
            echo "Checking is people live here........" . PHP_EOL;
            echo "Yes, people live here!" . PHP_EOL;
        }

        return $result;
    }
}