<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Demo_FOREACH</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>

<body>
<?php
echo "<h2>Boucle FOREACH</h2>";

$tab = array(1,2,3,"test");

foreach ($tab AS $val){
    echo $val;
    echo "<br>";
}

foreach($tab AS $key => $val){
    echo $key. " => ".$val;
    echo "<br>";
}

?>
</body>
</html>