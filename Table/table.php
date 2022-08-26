<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Table de multiplication</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>

    <style>
        td, table {
            border: 1px solid black;
        }
    </style>

</head>
<body>

<?php

echo "<h2>Table de multilication</h2>";

echo "\n<table>";

// Empty case
echo "\n\t\t<th></th>";

// First line
for($j=1; $j<=12; $j++){
    echo "\n\t\t<th>" .$j." </th>";
}

//Table
for ($i=2; $i<=12; $i++){
    echo "\n\t<tr>";
    echo "\n\t\t<th>" . $i. "</th>";
    for($j=1; $j<=12; $j++){
        echo "\n\t\t<td>" . $i * $j ." </td>";
    }

    echo "\n\t</tr>";
}

echo "\n</table>\n";

?>

</body>
</html>
