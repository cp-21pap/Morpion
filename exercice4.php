<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exemple4</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="utfl-8" />
</head>
<body>

<?php
echo "<h2>Exercice 4</h2>";

$rayon = 12;
$pi = 3.14159265359;
$diametre = 2 * $rayon;
$circonference = $diametre * $pi;
$surface = $pi * ($rayon*$rayon);

echo "Diametre : " . $diametre;
echo "<br>";
echo "Circonférence : " . round($circonference,0);
echo "<br>";
echo "Surface : ". round($surface, 0);


?>

</body>
</html>
