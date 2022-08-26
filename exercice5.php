<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exemple4</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="utfl-8" />
</head>
<body>

<?php
echo "<h2>Structures de test</h2>";

$seconde = date("s");

if($seconde < 30){
    echo $seconde. " est plus petit que 30";
}elseif($seconde == 30){
    echo $seconde. " est égal à 30";
}
else{
    echo $seconde. " est plus grand 30";
}
echo "<br>";
if($seconde%2){
    echo $seconde. " est impaire";
}else{
    echo $seconde. " est paire";
}

?>
</body>
</html>
