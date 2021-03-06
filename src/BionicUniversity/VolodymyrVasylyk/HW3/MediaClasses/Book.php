<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses;

/**
 * Class Book
 *
 * @package BionicUniversity\VolodymyrVasylyk\HW3\MediaClasses
 *
 */
class Book extends PaperMedia implements ShowInterface
{
    use YearTrait; //LanguageTrait, ;

    /**
     * @var string
     */
    public $author;
    /**
     * @var string
     */
    public $cover;
    /**
     * @var bool
     */
    public $havePictures;

    /**
     * @param int    $author
     * @param string $title
     * @param bool   $havePictures
     */
    public function __construct($author, $title, $havePictures = true)
    {
        $this->author = $author;
        $this->title = $title;
        $this->havePictures = true; //$this->setHavePictures($havePictures);
    }

//    /**
//     * @return string
//     */
//    public function getTitle()
//    {
//        return $this->title;
//    }

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
     *
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

    /**
     * Echoing some text
     */
    public function showInformation()
    {
        echo "Opening book. Reading information";

    }
}