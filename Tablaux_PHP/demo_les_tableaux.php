<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Demo: Les Tableaux</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Tableaux en PHP </h2>";

// Création du tableau et insértion des données manuellement
$tab = array(1, 2, 3, 4, 5);

$tab[10] = "data";

echo $tab[10];

//Debug Method (Affiche le tableau)
echo "<pre>";
print_r($tab);
echo "</pre>";

?>
</body>
</html>