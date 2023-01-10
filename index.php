<?php
include_once __DIR__ . '/classi/movie.php';

$movie1 = new Movie("Il Signore degli anelli - La Compagnia dell'anello", 2001 , ["avventura", "fantasy"], "178 min", "Peter Jackson", "Un giovane hobbit e un variegato gruppo, composto da umani, un nano, un elfo e altri hobbit, partono per un delicata missione, guidati dal potente mago Gandalf. Devono distruggere un anello magico e sconfiggere così il malvagio Sauron.");

var_dump($movie1);

$movie2 = new Movie("Il Signore degli anelli - Le due torri", 2002 , ["avventura", "fantasy"], "179 min", "Peter Jackson", "I membri della Compagnia dell'anello, ora separati, seguono percorsi diversi nel tentativo di distruggere l'anello e sconfiggere Sauron.");

var_dump($movie2);

$movie3 = new Movie("Il Signore degli anelli - Il ritorno del re", 2003 , ["avventura", "fantasy"], "210 min", "Peter Jackson", "Mentre Frodo e Sam, accompagnati da Gollum, proseguono il loro viaggio verso Monte Fato per distruggere l'anello, il resto della compagnia corre in soccorso di Rohan e Gondor, impegnati nella battaglia dei Campi del Pellenor.");

var_dump($movie3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <div class="movie-1">
        <h3><?php echo $movie1->getInfo() ?></h3>
        <h4><?php echo $movie1->getDescription() ?></h4>
    </div>
    <div class="movie-2">
        <h3><?php echo $movie2->getInfo() ?></h3>
        <h4><?php echo $movie2->getDescription() ?></h4>
    </div>
    <div class="movie-3">
        <h3><?php echo $movie3->getInfo() ?></h3>
        <h4><?php echo $movie3->getDescription() ?></h4>
    </div>

</body>
</html>