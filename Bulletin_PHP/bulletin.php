<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bulletin de notes ICH</title>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html"  charset="utfl-8"/>
    <link rel="stylesheet" type="text/css" href="bulletin.css" media="all">
</head>
<body>

<!--Titre de la page-->
<h2>Bulletin ICH</h2>

<h4>Paul Perhaita</h4>

<!--Sous-titre (Modules)-->
<h3 class = title>Modules de compétences en informatique </h3>

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
$tab_mod["ICH 431"]["desc"] = " - Exécuter des mandats dans un environnement informatique"; //Description
$tab_mod["ICH 431"]["note"] = 4.5; //Note

//Tableau des CIE
$tab_cie["ICH 123"]["desc"] = "- Activer les services d'un serveur"; //Description
$tab_cie["ICH 123"]["note"] = 5.0; //Note
$tab_cie["ICH 187"]["desc"] = "- Mettre en service un poste de travail ICT avec le système d’exploitation"; //Description
$tab_cie["ICH 187"]["note"] = 5.0; //Note
$tab_cie["ICH 216"]["desc"] = "- Intégrer les terminaux IoE dans une plateforme existante"; //Description
$tab_cie["ICH 216"]["note"] = 5.5; //Note
$tab_cie["ICH 293"]["desc"] = "- Créer et publier un site Web"; //Description
$tab_cie["ICH 293"]["note"] = 4.5; //Note

//Note TPI
$tpi = 5.6; //Note

//----------------------------------------------------------------------------------------------------------------------

$notes_mod = 0; //Initialisation de l'addition des notes des CCO à 0
$i_mod = 0; //Initialisation de l'incrémentation des notes des CCO à 0

$notes_cie = 0; //Initialisation de l'addition des notes des CIE à 0
$i_cie = 0; //Initialisation de l'incrémentation des notes des CIE à 0

//----------------------------------------------------------------------------------------------------------------------

//Boucle d'affichage des Modules
foreach ($tab_mod AS $id_mod => $value){ // $id_mod = "ICH XYZ"?>
    <table>
        <tr>
            <td class="ich"><?php echo $id_mod; ?></td> <!--Affichage des IDs des CCO-->
            <td class="modules"><?php echo $tab_mod[$id_mod]["desc"]; ?></td> <!--Affichage les description des CCO-->

            <!--Test pour savoir si la note est suffisante avec la fonction color-->
            <?php color($tab_mod, $id_mod);?>
        </tr>
   </table>

<?php
    $notes_mod +=$tab_mod[$id_mod]["note"]; //Addition de toutes les notes des cco
    $i_mod++; //Incrémentation de $i_mod pour avoir le nombre de notes des CCO
}
?>

<!--------------------------------------------------------------------------------------------------------------------->

<!--Sous-titre (CIE)-->
<h3 class="title">Cours Interentreprise</h3>

<?php
//Boucle d'affichage des CIE
foreach ($tab_cie AS $id_cie => $value) {?>
    <table>
        <tr>
           <td class ="ich"> <?php echo $id_cie; ?></td> <!--Affichage des IDs des CIE-->
           <td class ="modules"> <?php echo $tab_cie[$id_cie]["desc"]; ?></td> <!--Affichage les description des CIE-->

            <!--Test pour savoir si la note est suffisante-->
            <?php color($tab_cie, $id_cie); ?>
        </tr>
    </table>

<?php
    $notes_cie +=$tab_cie[$id_cie]["note"]; //Addition de toutes les notes des CIE
    $i_cie++; //Incrémentation de $i_mod pour avoir le nombre de notes des CIE
}?>

<!--------------------------------------------------------------------------------------------------------------------->

<?php
// Calcule de la moyenne des CCO
$moyenne_mod = $notes_mod / $i_mod; //Calcule de la moyenne des CCO non arrondie
$round_moyenne_mod = round($moyenne_mod*2)/2; //On arrondie la moyenne des CCO au demi point

// Calcule de la moyenne des CIE
$moyenne_cie = $notes_cie / $i_cie; //Calcule de la moyenne des CIE non arrondie
$round_moyenne_cie = round($moyenne_cie*2)/2; //On arrondie la moyenne des CIE au demi point

//Calcule de la moyenne des Compétences en informatique
$moyenne_comp_info = ($round_moyenne_mod + $round_moyenne_cie) / 2;

//Calcule de la note globale
$note_globale = ($moyenne_comp_info + $tpi) / 2;
$note_globale = number_format($note_globale,2); //La note est arrondie à 2 chiffres après la virgule
?>

<!--------------------------------------------------------------------------------------------------------------------->

<?php
//Fonction test pour savoir si la note est suffisante
function color($tab_ , $id_){
    if($tab_[$id_]["note"] < 4)
        {echo "<td class = insuffisant>".$tab_[$id_]["note"]." </td>";} //Affichage des notes des CIE insuffisantes
            else{echo "<td class = suffisant>".$tab_[$id_]["note"]."</td>";} //Affichage des notes des CIE suffisantes
} ?>

<!--------------------------------------------------------------------------------------------------------------------->

<!--Sous-titre (CIE)-->
<h3 class="title">Compétences en informatique</h3>

<!--Affichage des moyennes des Compétences en informatique-->
<table>
    <tr>
        <td class="ich">Modules de compétence en informatique</td>
        <td class="notes"><?php echo $round_moyenne_mod ?> </td> <!--Affichage de la moyenne des CCO-->
    </tr>

    <tr>
        <td class="ich">Cours Interentreprise</td>
        <td class="notes"><?php echo $round_moyenne_cie ?></td><!--Affichage de la moyenne des CIE-->
    </tr>
</table>

<table>
    <tr>
        <br>
        <td class="ich">Moyenne</td>
        <td class="notes"><?php echo $moyenne_comp_info; ?></td> <!--Affichage de la moyenne des compétences en informatique-->
    </tr>
</table>

<!--Sous-titre (TPI)-->
<h3 class = title>TPI</h3>
<table>
    <tr>
        <td class="ich">Moyenne</td>
        <td class="notes"><?php echo $tpi; ?></td> <!--Affichage de la moyenne TPI-->
    </tr>
</table>

<!--Sous-titre (Note Globale)-->
<table>
    <tr>
        <td> <h3>Note globale</h3> </td>
        <td class="notes"> <h4><?php echo $note_globale ?></h4> </td> <!-- Affichage de la note globale -->
    </tr>
</table>

<table>
    <tr>
        <td> <h3>État du CFC : </h3></td>

        <!--Test pour savoir l'état du CFC par rapport à la note gloabe -->
        <?php if($note_globale < 4)
            {echo "<td class = insuffisant>"."<h3><b>Échec</b></h3>"." </td>";} //Affichage de l'état du CFC -> Insuffisant-->
                else{echo "<td class = suffisant>"."<h3><b>Réussi</b></h3>"."</td>";} //Affichage de l'état du CFC -> Suffisant ?>
    </tr>
</table>

</body>
</html>