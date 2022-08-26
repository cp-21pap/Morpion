<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exemple4</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="utfl-8" />
</head>
<body>

<?php
echo "<h2>Fonctions date et mktime</h2>";

$time = mktime(12,10,20,8,25,2018);
echo $time;
echo "<br>";
echo date("D-m-Y H:i:s", $time );

?>
</body>
</html>