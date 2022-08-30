<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Restaurant - L'ardoise</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>

<?php
$carte[] =  "Escalope de porc pannée";
$carte[] =  "Entrecôte de boeuf de la région";
$carte[] =  "Cordon bleu de veau à la tête de moine";
$carte[] =  "Joue de boeuf braisée";
$carte[] =  "Filet de sandre meunière";
?>

<form action="result.php" method="post">
    <h2>Passez votre commande : </h2>

    <select name="repas">
        <?php
        foreach ($carte AS $key => $plat){
            echo "<option value=\"".$key."\">".$plat."</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" name="send" value="Commander">



</form>
</body>
</html>