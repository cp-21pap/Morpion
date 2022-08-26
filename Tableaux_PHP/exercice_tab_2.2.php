<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice_Tab_3</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Exercice tableau 3</h2>";

$tab = array();

for($i = 1;$i <= 12; $i++){
    $tab[] = $i * 7;
}

echo "<pre>";
print_r($tab);
echo "</pre>";
?>
</body>
</html>