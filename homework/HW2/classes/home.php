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

    protected $people;


    public function __construct($floors, $colour)//, $doors, $windows, $length, $width)
    {
        //parent::__construct($doors, $windows, $length, $width);
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

    function checkInhabitants()
    {
        echo "Checking is people live here........".PHP_EOL;
        echo "Yes, people live here!".PHP_EOL;
    }


}