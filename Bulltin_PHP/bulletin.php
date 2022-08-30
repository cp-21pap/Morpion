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
$tab_cie["ICH 123"]["desc"] = 5.0; //Note
$tab_cie["ICH 187"]["desc"] = "- Mettre en service un poste de travail ICT avec le système d’exploitation"; //Description
$tab_cie["ICH 187"]["desc"] = 5.0; //Note
$tab_cie["ICH 216"]["desc"] = "- Intégrer les terminaux IoE dans une plateforme existante"; //Description
$tab_cie["ICH 216"]["desc"] = 5.5; //Note
$tab_cie["ICH 216"]["desc"] = "- Créer et publier un site Web"; //Description
$tab_cie["ICH 216"]["desc"] = 4.5; //Note

foreach ($tab_mod AS $key => $value){
    echo"<table>";
        echo"<tr>"
        echo $key;
    echo $tab_mod[$key]["desc"];
    echo $tab_mod[$key]["note"];
   echo "<br>";
   echo"</table>";
}
?>

</body>
</html>