<?php setlocale(LC_TIME, 'it_IT.UTF-8');
$day_names = array(
    "Domenica", "Lunedì", "Martedì", "Mercoledì",
    "Giovedì", "Venerdì", "Sabato"
);
$month_names = array(
    "", "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno",
    "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
);

$day_of_week = $day_names[date('w')];
$month = $month_names[date('n')]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>
        <?php echo $day_of_week . ' ' . date('j') . ' ' . $month . ' ' . date('Y'); ?>
    
</h3></body>
</html>
