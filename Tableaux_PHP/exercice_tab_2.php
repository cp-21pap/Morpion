<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice_Tab_3</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Exercice tableau 2</h2>";

$tab = array();

for($i = 1;$i <= 12; $i++){
    $tab[$i] = $i * 7;
    echo "$i * 7 = $tab[$i]"."</br>";
}
?>
</body>
</html>