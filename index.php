<?php

class Genre
{
    protected $name;
    protected $descritpion;

    public function __construct($name, $descritpion)
    {
        $this->name = $name;
        $this->descritpion = $descritpion;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->descritpion;
    }
}


class Movie
{
    protected $title;
    protected $descritpion;
    protected $date;
    protected $rating;
    protected Genre $genre;

    public function __construct($title, $descritpion, $date, $rating, Genre $genre)
    {
        $this->title = $title;
        $this->descritpion = $descritpion;
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
        return $this->descritpion;
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

$genre_action = new Genre("Azione", "Film pieni di pericolo ed esplosioni");

$movies = [
    new Movie("Bob Aggiustatutto", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", $genre_action),
    new Movie("Bob Aggiustatutto 2", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", $genre_action),
    new Movie("Bob Aggiustatutto 3", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", $genre_action)
]

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo film </title>
    <!-- Linking bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    <?php var_dump($movies); ?>
</body>

</html>