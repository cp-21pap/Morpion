<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bulletin de notes ICH</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utfl-8"/>
</head>
<body>

<!--Titre de la page-->
<h2>Bulletin ICH</h2>

<!--Sous-titre (Modules)-->
<h3>Modules de compétences en informatique </h3>

<?php
// Tableau des modules
$tab_mod["ICH 106"]["desc"] = " - Interroger, traiter et assurer la maintenance des bases de données"; //Description
$tab_mod["ICH 106"]["note"] = 3.5; //Note
$tab_mod["ICH 117"]["desc"] = " - Mettre en place l'infrastructure informatique d'une petite entreprise"; //Description
$tab_mod["ICH 117"]["note"] = 4.5; //Note
$tab_mod["ICH 122"]["desc"] = " - Automatiser des procédures à l'aide de scripts et de macros"; //Description
$tab_mod["ICH 122"]["note"] = 5.0; //Note
$tab_mod["ICH 162"]["desc"] = " - Analyser et modéliser des données"; //Description
$tab_mod["ICH 162"]["note"] = 4.5; //Note
$tab_mod["ICH 164"]["desc"] = " - Créer des bases de données et y insérer des données"; //Description
$tab_mod["ICH 164"]["note"] = 5.5; //Note
$tab_mod["ICH 231"]["desc"] = " - Appliquer la protection et la sécurité des données"; //Description
$tab_mod["ICH 231"]["note"] = 5.0; //Note
$tab_mod["ICH 319"]["desc"] = " - Concevoir et implémenter des applications"; //Description
$tab_mod["ICH 319"]["note"] = 4.5; //Note
$tab_mod["ICH 431"]["desc"] = " - Concevoir et implémenter des applications"; //Description
$tab_mod["ICH 431"]["note"] = 4.5; //Note

//Tableau des CIE
$tab_cie["ICH 123"]["desc"] = "- Activer les services d´un serveur"; //Description
$tab_cie["ICH 123"]["note"] = 5.0; //Note
$tab_cie["ICH 187"]["desc"] = "- Mettre en service un poste de travail ICT avec le système d’exploitation"; //Description
$tab_cie["ICH 187"]["note"] = 5.0; //Note
$tab_cie["ICH 216"]["desc"] = "- Intégrer les terminaux IoE dans une plateforme existante"; //Description
$tab_cie["ICH 216"]["note"] = 5.5; //Note
$tab_cie["ICH 216"]["desc"] = "- Créer et publier un site Web"; //Description
$tab_cie["ICH 216"]["note"] = 4.5; //Note

$notes_mod = 0; //Initialisation de l'addition des notes des CCO à 0
$i_mod = 0; //Initialisation de l'incrémentation des notes des CCO à 0

$notes_cie = 0; //Initialisation de l'addition des notes des CIE à 0
$i_cie = 0; //Initialisation de l'incrémentation des notes des CIE à 0

//Boucle d'affichage des Modules
foreach ($tab_mod AS $id_mod => $value){ // $id_mod = "ICH XYZ"
    echo"<table>";
        echo"<tr>";
            echo $id_mod; //Affichage des IDs des CCO
            echo $tab_mod[$id_mod]["desc"]; //Affichage des description des CCO
            echo $tab_mod[$id_mod]["note"]; //Affichage des notes des CCO
            echo "<br>";
        echo"</tr>";
   echo"</table>";

    $notes_mod +=$tab_mod[$id_mod]["note"]; //Addition de toutes les notes des cco
    $i_mod++; //Incrémentation de $i_mod pour avoir le nombre de notes des CCO
}
?>

<!--Sous-titre (CIE)-->
<h3>Cours Interentreprise</h3>

<?php
//Boucle d'affichage des CIE
foreach ($tab_cie AS $id_cie => $value) {
    echo"<table>";
        echo"<tr>";
            echo $id_cie; // Affichage des IDs des CIE
            echo $tab_cie[$id_cie]["desc"]; //Affichage des description des CIE
            echo $tab_cie[$id_cie]["note"]; //Affichage des notes des CIE
        echo "</tr>";
    echo"</table>";

    $notes_cie +=$tab_cie[$id_cie]["note"]; //Addition de toutes les notes des CIE
    $i_cie++; //Incrémentation de $i_mod pour avoir le nombre de notes des CIE
}
?>

<!--Sous-titre (CIE)-->
<h3>Compétences en informatique</h3>

<?php
// Calcule de la moyenne des CCO
$moyenne_mod = $notes_mod / $i_mod; //Calcule de la moyenne des CCO non arrondie
$round_moyenne_mod = round($moyenne_mod*2)/2; //On arrondie la moyenne des CCO au demi point

// Calcule de la moyenne des CIE
$moyenne_cie = $notes_cie / $i_cie; //Calcule de la moyenne des CIE non arrondie
$round_moyenne_cie = round($moyenne_cie*2)/2; //On arrondie la moyenne des CIE au demi point

//Calcule de la moyenne des Compétences en informatique
$moyenne_comp_info = ($round_moyenne_mod + $round_moyenne_cie) / 2;

//Affichage des moyennes des Compétences en informatique
echo "<table>";
    echo "<tr>";
        echo"<td>Modules de compétence en informatique</td>";
        echo "<td>$round_moyenne_mod</td>"; //Affichage de la moyenne des CCO
    echo "</tr>";

    echo "<tr>";
        echo"<td>Cours Interentreprise</td>";
        echo "<td>$round_moyenne_cie</td>"; //Affichage de la moyenne des CIE
    echo "</tr>";
echo "</table>";

echo "<table>";
    echo "<tr>";
        echo "<br>";
        echo "<td>Moyenne</td>";
        echo "<td>$moyenne_comp_info</td>"; //Affichage de la moyenne des compétences en informatique
    echo "</tr>";
echo "</table>";

?>

</body>
</html>