<?php

namespace BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses;

/**
 * Class AudioBook
 * @package BionicUniversity\VolodymyrVasylyk\HW3\Translator\MediaClasses
 *
 */
class AudioBook extends DigitalMedia implements ShowInterface
{
    use YearTrait; //LanguageTrait, ;

    /**
     * @var string
     */
    protected $author;
    /**
     * @var array()
     */
    protected $bookmarks;

    /**
     * @param $author
     * @param $title
     */

    public function __construct($author, $title)
    {
        $this->author = $author;
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
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function getBookmarks()
    {
        return $this->bookmarks;
    }

    /**
     * @param array $bookmarks
     */
    public function setBookmarks($bookmarks)
    {
        $this->bookmarks = $bookmarks;
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
     * @return void
     */
    public function showInformation()
    {
        echo "Playing audioBook";
    }

}
