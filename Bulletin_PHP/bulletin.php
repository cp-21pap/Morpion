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

<?php
// Tableau des modules
$modules[106]["desc"] = " - Interroger, traiter et assurer la maintenance des bases de données"; //Description
$modules[106]["note"] = 3.5; //Note
$modules[117]["desc"] = " - Mettre en place l'infrastructure informatique d'une petite entreprise"; //Description
$modules[117]["note"] = 4.5; //Note
$modules[122]["desc"] = " - Automatiser des procédures à l'aide de scripts et de macros"; //Description
$modules[122]["note"] = 5.0; //Note
$modules[162]["desc"] = " - Analyser et modéliser des données"; //Description
$modules[162]["note"] = 4.5; //Note
$modules[164]["desc"] = " - Créer des bases de données et y insérer des données"; //Description
$modules[164]["note"] = 5.5; //Note
$modules[231]["desc"] = " - Appliquer la protection et la sécurité des données"; //Description
$modules[231]["note"] = 5.0; //Note
$modules[319]["desc"] = " - Concevoir et implémenter des applications"; //Description
$modules[319]["note"] = 4.5; //Note
$modules[431]["desc"] = " - Exécuter des mandats dans un environnement informatique"; //Description
$modules[431]["note"] = 4.5; //Note

//Tableau des CIE
$modules[123]["desc"] = " - Activer les services d'un serveur"; //Description
$modules[123]["note"] = 5.0; //Note
$modules[187]["desc"] = " - Mettre en service un poste de travail ICT avec le système d’exploitation"; //Description
$modules[187]["note"] = 5.0; //Note
$modules[216]["desc"] = " - Intégrer les terminaux IoE dans une plateforme existante"; //Description
$modules[216]["note"] = 5.5; //Note
$modules[293]["desc"] = " - Créer et publier un site Web"; //Description
$modules[293]["note"] = 4.5; //Note

$domaines['CI']['modules'] = array(106, 117, 122, 162, 164, 231, 319, 431); //ID Modules CCO
$domaines['CI']['title'] = "Modules de compétences en informartique"; //Sous-titre (Modules)
$domaines['CIE']['modules'] = array(123, 187, 216, 293); //ID Modules CIE
$domaines['CIE']['title'] = "Cours Interentreprise"; //Sous-titre (CIE)

//Note TPI
$tpi = 5.6; //Note

//----------------------------------------------------------------------------------------------------------------------

$notes_mod = 0; //Initialisation de l'addition des notes des CCO à 0
$i_mod = 0; //Initialisation de l'incrémentation des notes des CCO à 0

$notes_cie = 0; //Initialisation de l'addition des notes des CIE à 0
$i_cie = 0; //Initialisation de l'incrémentation des notes des CIE à 0

//----------------------------------------------------------------------------------------------------------------------

//Boucle d'affichage des Modules
foreach ($domaines AS $key => $tab_mod){
    echo "<h3 class = title>" .$tab_mod["title"]. "</h3>"; //Affichage du sous-titre (CCO / CIE)

    echo "<table>";

    foreach ($tab_mod['modules'] AS $num_mod){
        echo "<tr>";
            echo "<td class='ich'>".$num_mod. $modules[$num_mod]["desc"]."</td>"; //Affichage de la description
            echo "<td class='ich'>".color($modules, $num_mod)."</td>"; //Affichage des notes
        echo "</tr>";
        if($key == "CI"){
            $notes_mod += $modules[$num_mod]["note"]; //Addition de toutes les notes des cco
            $i_mod++; //Incrémentation de $i_mod pour avoir le nombre de notes des CCO
        } else{}
            $notes_cie += $modules[$num_mod]["note"]; //Addition de toutes les notes des CIE
            $i_cie++; //Incrémentation de $i_cie pour avoir le nombre de notes des CIE
    }

    echo "</table>";
}
?>

<!--------------------------------------------------------------------------------------------------------------------->

<?php
//Fonction test pour savoir si la note est suffisante
function color($tab_ , $id_){
    if($tab_[$id_]["note"] < 4)
    {echo "<td class = insuffisant>".$tab_[$id_]["note"]." </td>";} //Affichage des notes insuffisantes
        else{echo "<td class = suffisant>".$tab_[$id_]["note"]."</td>";} //Affichage des notes suffisantes
} ?>

<!--------------------------------------------------------------------------------------------------------------------->

<?php
// Calcule de la moyenne des CCO
$moyenne_mod = $notes_mod / $i_mod; //Calcule de la moyenne des CCO non arrondie
$round_moyenne_mod = round($moyenne_mod*2)/2; //On arrondie la moyenne des CCO au demi point

// Calcule de la moyenne des CIE
$moyenne_cie = $notes_cie / $i_cie; //Calcule de la moyenne des CIE non arrondie
$round_moyenne_cie = round($moyenne_cie*2)/2; //On arrondie la moyenne des CIE au demi point

//Calcule de la moyenne des Compétences en informatique
$round_moyenne_comp_info = ($round_moyenne_mod + $round_moyenne_cie) / 2;

//Calcule de la note globale
$note_globale = ($round_moyenne_comp_info + $tpi) / 2;
$note_globale = number_format($note_globale,2); //La note est arrondie à 2 chiffres après la virgule
?>

<!--------------------------------------------------------------------------------------------------------------------->

<?php function average($titre_ , $round_moyenne_){
echo "<table>";
    echo "<tr>";
        echo "<td class = ich>$titre_</td>";
        echo "<td class = notes>$round_moyenne_</td>"; // Affichage de la moyenne
    echo "</tr>";
echo "</table>";
}?>

<!--------------------------------------------------------------------------------------------------------------------->

<!--Sous-titre (CIE)-->
<h3 class="title">Compétences en informatique</h3>

<!--Affichage des moyennes des Compétences en informatique-->
<?php $titre_mod = "Modules de compétence en informatique";
    average($titre_mod, $round_moyenne_mod); //Affichage de la moyenne des CCO?>

<?php $titre_cie = "Cours Interentreprise";
    average($titre_cie, $round_moyenne_cie); //Affichage de la moyenne des CIE?>

<?php $titre_moyenne = "Moyenne";
    average($titre_moyenne, $round_moyenne_comp_info);  //Affichage de la moyenne des CIE?>

<!--Sous-titre (TPI)-->
<h3 class = title>TPI</h3>
<?php average($titre_moyenne, $tpi); ?>

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