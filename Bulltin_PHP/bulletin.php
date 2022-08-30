<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bulletin de notes ICH</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>


//Titre de la page
<h2>Bulletin ICH</h2>

<h3>Modules de compétences en informatique </h3>
<?php
$tab_mod["117"]["informatique ---"] = "Informatique"

foreach ($modules AS $key => $value){
    echo $key. " --> ".$value;
    echo "<br>";
}
?>

</body>
</html>