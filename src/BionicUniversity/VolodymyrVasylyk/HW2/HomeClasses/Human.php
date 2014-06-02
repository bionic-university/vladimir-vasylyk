<?php

namespace BionicUniversity\VolodymyrVasylyk\HW2\HomeClasses;

/**
 * Class Human
 */
class Human
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $head;
    /**
     * @var int
     */
    protected $hands;
    /**
     * @var string
     */
    protected $body;
    /**
     * @var int
     */
    protected $legs;

    /**
     * @param int $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Opening door
     */
    public function openTheDoor()
    {
        echo "Opening the door..." . PHP_EOL;
    }
} 