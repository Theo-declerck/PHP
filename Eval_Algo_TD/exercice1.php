<?php
$w = true;
echo ("       Calcul d'un cercle " . "\n");
while ($w == true) {
    $w = false;

    $rayon = readline("Quel est le rayon du cercle ? ");
    $circ = ($rayon * 2) * M_PI;
    $surf = ($rayon * $rayon) * M_PI;


    echo ("Sa circonférence est de               : $circ" . "\n");
    echo ("Sa surface est de                     : $surf" . "\n");

    $on = readline("Voulez-vous faire un autre calcul ? (O/N) : "); // Nous permet de recommencer l'exercice //
    if ($on == "O" or $on == "o") {
        $w = true;
    } else {

        echo ("Au revoir et a bientôt ! ");
        exit;
    }
}
