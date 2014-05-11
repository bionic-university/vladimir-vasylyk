<?php

/**
 * @author vov_cheek
 *
 *
 *
 * Class Circle
 * @package bionic
 */
class Circle extends AbstractCircle

{
    /**
     * @var string
     */
    public $material;
    /**
     * @var float
     */
    public $radius;
    /**
     * @var string
     */
    public $colour;

    /**
     * @param $colour
     * @param $material
     * @param $radius
     */
    public function  __construct($colour, $material, $radius)
    {
        parent::__construct($radius);
        $this->material = $material;
        $this->colour = $colour;
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


}

//є об"єкт дім. застосувати свойства, методи, кілька класів