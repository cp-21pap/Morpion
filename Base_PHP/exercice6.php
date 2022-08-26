<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exemple4</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="utfl-8" />
</head>
<body>

<?php
echo "<h2>Exercice 6</h2>";

$date = date("m");


if($date == 01){
    echo "Janvier";
}elseif($date == 02){
    echo "Février";
}elseif($date == 03){
    echo "Mars";
}elseif($date == 04){
    echo "Avril";
}elseif($date == 05){
    echo "Mai";
}elseif($date == 06){
    echo "Juin";
}elseif($date == 07){
    echo "Juillet";
}else{
    echo "Août";
}
?>
</body>
</html>
