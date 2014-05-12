<?php

class AudioBook extends DigitalMedia implements ShowInterface
{
    /**
     * @var string
     */
    protected $author;
    /**
     * @var array()
     */
    protected $bookmarks;

    function __construct($author, $bookmarks)
    {
        $this->author = $author;
        $this->bookmarks = new ArrayObject();
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

    public function showInformation()
    {
        echo "Playing audioBook";
    }


} 