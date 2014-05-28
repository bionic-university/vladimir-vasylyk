<?php

/**
 * Class Human
 */
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

    /**
     * @param int $head
     * @param int $hands
     * @param string $body
     * @param int $legs
     */
    public function __construct($head, $hands, $body, $legs)
    {
        $this->$head = $head;
        $this->hands = $hands;
        $this->body = $body;
        $this->legs = $legs;
    }

    /**
     * Opening door
     */
    public function openTheDoor()
    {
        echo "Opening the door..." . PHP_EOL;
    }
} 