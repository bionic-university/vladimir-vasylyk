<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses;

use Symfony\Component\Validator\Constraints\Null;

/**
 * Class Magazine
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses
 *
 */
class Magazine extends PaperMedia implements ShowInterface
{
    use YearTrait; //LanguageTrait,
    /**
     * @var string
     */
    protected $genre;
    /**+
     * @var bool
     */
    protected $isColour;
    /**
     * @var string
     */
    protected $headEditor;

    /**
     * @param string $title
     * @param string $genre
     * @param bool   $isColour
     */
    public function __construct($title, $genre, $isColour = true)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->isColour = true; //$this->setIsColour($isColour);
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @param $name
     *
     * @return null
     */
    function __get($name)
    {
        return isset($this->$name) ? $this->$name : NULL;
    }

    /**
     * @return bool
     */
    public function IsColour()
    {
        return $this->isColour;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param bool $isColour
     */
    public function setIsColour($isColour)
    {
        $this->isColour = $isColour;
    }

    /**
     * Echoing some information
     */
    public function showInformation()
    {
        echo "Opening Magazine. Reading information";

    }

}
