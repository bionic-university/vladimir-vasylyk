<?php

class Magazine extends PaperMedia implements ShowInterface
{
    use LanguageTrait, YearTrait;

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
     * @param bool $isColour
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
     * @return bool
     */
    public function getIsColour()
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

    public function showInformation()
    {
        echo "Opening Magazine. Reading information";

    }


} 