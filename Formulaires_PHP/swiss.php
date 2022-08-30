<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Check_Page</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
    <link rel="stylesheet" type="text/css" href="swiss.css" media="all">
</head>

<body>
<?php
?>
<form action=result.php method=post>


<img alt=Swiss Logo src=logo_swiss.png>

<h2> Réservez votre vol </h2>

<table>
<tbody>

<tr>
    <td>De</td>
    <td>
        <select name="from">
            <?php
            $airport = explode("\n", file_get_contents("liste.txt"));
            foreach ($airport as $value) {
                echo "<option value=\"$value\">$value </option>";
            }
            ?>
        </select>
    </td>

<td>A</td>
<td>
    <select name="to">
        <?php
        $airport = explode("\n", file_get_contents("liste.txt"));
        foreach ($airport as $value) {
            echo "<option value=\"$value\">$value </option>";
        }
        ?>
    </select>
</td>
</tr>

<tr>
    <td>Vol Aller</td>
    <?php
    $date = date("Y-m-d");
    echo "<td> <input type=\"date\" name=\"depart\" value=$date /> </td>"
    ?>

    <td>Vol Retour</td>
    <?php
    $date = date("Y-m-d", mktime(0,0,0,date("m"), date("d") + 1, date("Y")));
    echo "<td> <input type=\"date\" name=\"retour\" value=$date /> </td>"
    ?>
</tr>

<tr>
    <td> <br> </td>
</tr>

    <tr>
        <td>Adultes</td>
        <td><input type="number" id="adultes" name="adultes" min="0"></td>
    </tr>

<tr>
    <td>Enfants</td>
    <td><input type="number" id="enfants" name="enfants" min="0"></td>
</tr>
<tr>
    <td>Bébés</td>
    <td><input type="number" id="bb" name="bb" min="0"></td>
</tr>
<tr>
    <td> <br> </td>
</tr>
<tr>
    <td><input type="checkbox" name="siege"></td>
    <td>Réserver votre siège?</td>
</tr>
<tr>
    <td> <br> </td>
</tr>

</table>
</tbody>

    <div id="button">
        <p><input type="submit" value="Rechercher votre vol"></p>
    </div>


</body>
</html>