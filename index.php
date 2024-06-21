<?php

class Movie
{
    public $name;
    public $time;

    public function __construct($nome, $durata)
    {
        $this->name = $nome;
        $this->time = $durata;
    }
}

$movies = [
    new Movie("interstellar", "02:30"),
    new Movie("deadpool", "01:45"),
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-1</title>
</head>

<body>
    <h1>php-oop-1</h1>

    <?php
    foreach ($movies as $movie) {
        echo $movie->name;
    }
    ?>

</body>

</html>