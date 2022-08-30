<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Restaurant - L'ardoise</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>

<?php
require_once("carte.inc.php");
?>

<form action="result.php" method="post">

    <h2>Passez votre commande : </h2>
    <h4>Entrées : </h4>
    <select name="starter">
        <?php
        $tab_starters = $carte['starter'];

        foreach ($tab_starters AS $key => $starter){
            echo "<option value=\"".$key."\">$starter</option>";
        }
        ?>
    </select>

    <h4>Plat principal : </h4>
    <select name="main">
        <?php
        $tab_mains = $carte['main'];

        foreach ($tab_mains AS $key => $main){
            echo "<option value=\"".$key."\">$main</option>";
        }
        ?>
    </select>


    <h4>Dessert : </h4>
    <select name="desert">
        <?php
        $tab_deserts = $carte['desert'];

        foreach ($tab_deserts AS $key => $desert){
            echo "<option value=\"".$key."\">$desert</option>";
        }
        ?>
    </select>

    <input type="submit" name="send" value="Commander">


</form>
</body>
</html>