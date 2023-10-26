<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOGO</title>
</head>
<body>
	<?php 
		// Gere pares de cartas (neste exemplo, apenas números)
        $cards = array();
        for ($i = 1; $i <= 8; $i++) {
            $cards[] = new Card($i, "img/$i.png");
            $cards[] = new Card($i, "img/$i.png");
        }
 
        // Embaralhe as cartas
        shuffle($cards);
 
        // Crie o layout das cartas
        foreach ($cards as $card) {
            echo '<div class="card" data-id="' . $card->id . '">';
            echo '<img src="img/card-back.png" alt="Card Back">';
            echo '<img class="front" src="' . $card->image . '" alt="Card Front">';
            echo '</div>';
        }


	 ?>
</body>
</html>