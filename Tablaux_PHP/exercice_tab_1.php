<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice_Tab_1</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Exercice tableau 1</h2>";

//Insértion
$day = array("Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$today = date("w");

echo "Nous somme : ". $day[$today];

/*
echo "<pre>";
print_r($day);
echo "</pre>";
*/
?>
</body>
</html>