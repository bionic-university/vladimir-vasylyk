<?php

class Human
{
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

    function __construct($head, $hands, $body, $legs)
    {
        $this->$head = $head;
        $this->hands = $hands;
        $this->body = $body;
        $this->legs = $legs;
    }

    public function openTheDoor()
    {
        echo "Opening the door..." . PHP_EOL;
    }
} 