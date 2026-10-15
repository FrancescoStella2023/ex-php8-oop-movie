<?php

class Movie
{
    public $title;
    public $description;
    public $date;
    public $rating;
    protected array $genres;

    use HasDirector;

    public function __construct($title, $description, $date, $rating, array $genres = [])
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->rating = $rating;
        $this->genres = $genres;
    }

    public function addGenre($genre)
    {
        $this->genres[] = $genre;
    }

    public function getGenres()
    {
        return $this->genres;
    }


    public function getGenreNames(): array
    {
        $names = [];

        foreach ($this->genres as $genre) {
            $names[] = $genre->getName();
        }

        return $names;
    }
}

?>