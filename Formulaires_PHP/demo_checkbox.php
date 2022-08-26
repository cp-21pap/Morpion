<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Demo: Les Formulaires</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>

<h2>Rappel sur les formulaires</h2>

<form action="result.php" method="post">

    <table>
         <tr>
            <td><b>Nom de l'utilisateur </b></td>
            <td><input type="text" name="nom"> </td>
         </tr>
        <tr>
            <td><b>E-mail </b></td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td><b>Note</b></td>
            <td>
                <select name="formation">
                    <option value="1">Insuffisant (1)</option>
                    <option value="2">Suffisant (2)</option>
                    <option value="3">Bien (3)</option>
                    <option value="4">Très bien (4)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>Message</b></td>
            <td><textarea></textarea></td>
        </tr>
        <tr>
            <td><b>Genre</b></td>
        </tr>
            <td>Homme</td>
            <td><input type="radio" name="choix" value="1"></td>
            <td>Femme</td>
            <td><input type="radio" name="choix" value="2"></td>
        </tr>
    </table>

    <br>
    <input type="text" name="prenom">
    <br>
    <input type="submit" value="envoyer">

</form>
</body>
</html>