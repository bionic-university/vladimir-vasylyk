<?php

//include "classes/AbstractHome.php";
include "classes/human.php";

/**
 * Class home
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
        $this->people = new Human(1, 2, 'tall', 2);
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
     * People live here
     */
    public function checkInhabitants()
    {
        echo "Checking is people live here........" . PHP_EOL;
        echo "Yes, people live here!" . PHP_EOL;
    }

}