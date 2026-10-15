<?php

class Movie
{
    protected $title;
    protected $description;
    protected $date;
    protected $rating;
    protected Genre $genre;

    public function __construct($title, $description, $date, $rating, Genre $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->rating = $rating;
        $this->genre = $genre;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getrating()
    {
        return $this->rating;
    }

    public function getGenreName()
    {
        return $this->genre->getName();
    }
}

?>