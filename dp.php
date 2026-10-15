<?php
$genre_action = new Genre("Azione", "Film pieni di pericolo ed esplosioni");
$genre_horror = new Genre("Azione", "Film carichi di paura e suspense");

$movies = [
    new Movie("Bob Aggiustatutto", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", [$genre_action]),
    new Movie("Bob Aggiustatutto 2", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", [$genre_action, $genre_horror]),
    new Movie("Bob Aggiustatutto 3", "Riuscira Bob ad aggisutare tuttto prima che il suo gemello cattivo boB lo distrugga?", "2027", "5", [$genre_action])
]

    ?>