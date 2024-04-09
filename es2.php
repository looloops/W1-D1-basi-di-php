<?php
$squadre = array(
    "Juventus" => array("Buffon", "Chiellini", "Bonucci", "De Ligt", "Cuadrado", "Arthur", "Bentancur", "Chiesa", "Dybala", "Morata", "Kulusevski"),
    "Inter" => array("Handanovic", "De Vrij", "Bastoni", "Skriniar", "Hakimi", "Barella", "Brozovic", "Vidal", "Perisic", "Lautaro", "Martinez"),
    "Milan" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Leao", "Ibrahimovic"),
   
);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squadre</title>
</head>
<body>
    <?php foreach ($squadre as $squadra => $formazione) {
    echo "<h2>$squadra</h2>";
    echo "<ul>";?>
    <?php foreach ($formazione as $giocatore) {
        echo "<li>$giocatore</li>";
    } 
    echo "</ul>";
} ?>

</body>
</html>
