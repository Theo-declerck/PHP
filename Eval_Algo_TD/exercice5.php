<?php
$tabvoyelle = ["a", "e", "i", "o", "u", "y"];
$tabconsonne = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"];
$tabchiffre = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$chaine = readline("Entrez une chaine de caractères :");
$chaine = strtolower($chaine);
$tabchaine = str_split($chaine); // crée un tableau avec toute la saisie//
$v = 0; // Compteur voyelle//
$c = 0; // compteur consonne//
$chiffre = 0; // compteur chiffre//
$spe = 0;
$w=true;

while ($w == true) {

    $chaine = trim($chaine); //  Trim nous permet d'enlever l'espave au début et a la fin du texte//

    echo ("Nombre de caractères : ");
    echo strlen($chaine); // Nous donne la longeur de la chaine de caractères //

    foreach ($tabchaine as $letter) {          // Permet de vérifier chaque lettres de la saisie pour voir si elle correspond a l'une des voyelles//
        if (in_array($letter, $tabvoyelle)) {
            $v++;
        }
    }
    foreach ($tabchaine as $letter) {              // Permet de vérifier chaque lettres de la saisie pour voir si elle correspond a l'une des consonnes//
        if (in_array($letter, $tabconsonne)) {
            $c++;
        }
    }
    foreach ($tabchaine as $letter) {              // Permet de vérifier chaque lettres de la saisie pour voir si elle correspond a l'un des chiffres//
        if (in_array($letter, $tabchiffre)) {
            $chiffre++;
        }
    }

    $alpha = $c + $v;
    $spe = strlen($chaine) - $v - $c - $chiffre - $alpha;               // On calcul le nombre de caracteres qui ne sont ni des consonne ni des voyelles ni des chiffres //
if($spe<0){
    $spe=0;
}


    //Affichage des compteur //
    echo "\n";
    echo ("Nombre de voyelle : $v " . "\n");
    echo ("Nombre de consonne : $c " . "\n");
    echo ("Nombre de Chiffres : $chiffre " . "\n");
    echo ("Nombre de  caractères spéciaux : $spe " . "\n");
    echo ("Nombre de caractères alphabétique : $alpha " . "\n");


                // Permet d'érire une autre suite de caractères //
    $on = readline("Voulez-vous écrire une autres suite ? (O/N) : ");
    if ($on == "O" or $on == "o") {
        $w = true;
    } else {

        echo ("Au revoir et a bientôt ! ");
        exit;
    }
}
