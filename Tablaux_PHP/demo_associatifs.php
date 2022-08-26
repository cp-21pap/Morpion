<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Demo_associatifs</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Demo associatifs</h2>";

$tab = array("nom" => "Lerdorf", "prenom" => "Rasmus");

echo $tab['nom'];
echo "<br>";
echo $tab['profession'] = "Inventeur de PHP";

echo "<pre>";
print_r($tab);
echo "</pre>";


?>
</body>
</html>