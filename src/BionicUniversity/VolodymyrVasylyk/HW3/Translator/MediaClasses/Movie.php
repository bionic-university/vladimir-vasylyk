<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

/**
 * Class Movie
 * @package BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses
 *
 */
class Movie extends DigitalMedia implements ShowInterface
{
    use YearTrait; //, LanguageTrait;
    /**
     * @var string
     */
    protected $quality;
    /**
     * @var array
     */
    protected $actors;
    /**
     * @var string
     */
    protected $director;

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
     * @param $title
     */
    public function __construct($title) //, $director)
    {
        $this->title = $title;
        //$this->director = $director;
    }

    /**
     * @return actors array()
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param array $newActor
     */
    public function setActors($newActor)
    {
        if (!$this->actors) {
            $this->actors = new ArrayObject();
        }
        $this->actors->append($newActor);

    }

    /**
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param string $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    /**
     *
     */
    public function showInformation()
    {
        echo "Playing movie...";
    }

}
