<?php

class Book extends PaperMedia implements ShowInterface
{
    use LanguageTrait, YearTrait;

    /**
     * @var string
     */
    protected $author;
    /**
     * @var string
     */
    protected $cover;
    /**
     * @var bool
     */
    protected $havePictures;

    public function __construct($author, $cover, $havePictures = true)
    {
        $this->author = $author;
        $this->cover = $cover;
        $this->havePictures = true; //$this->setHavePictures($havePictures);
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
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set cover
     * @param string $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    /**
     * @return boolean
     */
    public function isHavePictures()
    {
        return $this->havePictures;
    }

    /**
     * @param boolean $havePictures
     */
    public function setHavePictures($havePictures)
    {
        $this->havePictures = $havePictures;
    }

    public function showInformation()
    {
        echo "Opening book. Reading information";

    }


} 