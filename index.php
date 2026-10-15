<?php

require_once "./Traits/HasDirector.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
require_once "./dp.php";

$movies[1]->setDirector('Billy');

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