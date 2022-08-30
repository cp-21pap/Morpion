<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Restaurant - L'ardoise</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>

<h1>Commande client :</h1>

<?php
echo "<pre>";
require_once("carte.inc.php");
print_r($_POST);
echo "</pre>";

$num_starter = $_POST['starter'];
echo "Entrée : ".$carte['starter'][$num_starter];

$num_main = $_POST['main'];
echo "<br> Plat Principal : ".$carte['main'][$num_main];

$num_desert = $_POST['desert'];
echo "<br>Dessert : ".$carte['desert'][$num_desert];

?>

</body>
</html>