<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Check_Page</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Check_Page</h2>";

echo "<table>";
echo "<tbody>";

echo"<tr>";
echo "<th>Clef</th>";
echo "<th>Valeur</th>";
echo "</tr>";

echo"<tr>";
foreach ($_POST as $key => $value) {
    echo"<tr>";
    echo "<td> $key </td>";
    echo "<td> $value </td>";
    echo "</tr>";
}
echo "<br>";
echo "</tr>";

echo "</table>";
echo "</tbody>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
</body>
</html>