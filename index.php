<?php

class Movie
{
    public $name;
    public $time;
    public $price;

    public function __construct($nome, $durata, $prezzo)
    {
        $this->name = $nome;
        $this->time = $durata;
        $this->price = $prezzo;
    }

    public function description()
    {
        return "Il film " . $this->name . " ha una durata di: " . $this->time . ", e il costo è di: " . $this->price . "€";
    }
}

$movies = [
    new Movie("interstellar", "02:30", 8.30),
    new Movie("deadpool", "01:45", 4.60),
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
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li><?= $movie->description() ?></li>
        <?php } ?>
    </ul>

</body>

</html>