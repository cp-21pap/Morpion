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
echo "<table>";
echo "<tbody>";

echo"<tr>";
    echo "<th>Clef</th>";
    echo "<th>Valeur</th>";
echo "</tr>";

$infos = array(
        "nom" => "Perhaita",
        "prenom" => "Paul",
        "adresse" => "19",
        "npa" => "111",
        "ville" => "Fornet",
        "email" => "paul.perhaita@ceff.ch"
);

$aaa = array("nom", "prenom", "adresse", "npa", "ville", "email");

foreach ($infos as $key => $data) {
    echo"<tr>";
        echo "<td> $key </td>";
        echo "<td> $data </td>";
    echo "</tr>";
        }
        echo "<br>";


echo"</tbody>";
echo "</table>";
/*echo "<pre>";
print_r($tab);
echo "</pre>";
*/
?>
</body>
</html>