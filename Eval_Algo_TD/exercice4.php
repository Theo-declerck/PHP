<?php
$w = true;
$max = 0;
$tab1 = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$tab2 = ["B0", "AB", "LJ", "DC", "CO", "AN"];
$tab3 = [800, 950, 700, 900, 1400, 560];
$tab4 = [10000, 12000, 45000, 8000, 16000, 2500];
while ($w == true) {
    $w = false;
    $code = readline("Entrez le code de l'avion : ");
    for ($i = 0; $i <= count($tab1) - 1; $i++) { // recherche du model de l'avion //
        if ($code == $tab2[$i]) {
            echo ("Avion : $tab1[$i]   Vitesse : $tab3[$i]   Rayon d'action : $tab4[$i]" . "\n");
        }
    }
    $stat = readline("Voulez vous editer les statistiques? (O/N) "); // Permet d'afficher l'avion le plus rapide avec ça vitesse //
    if ($stat == "O" or $stat == "o") {
        for ($i = 0; $i <= count($tab3) - 1; $i++) {
            if ($tab3[$i] > $max) {
                $max = $tab3[$i];
                $avion = $tab1[$i];
            }
        }
        echo (" L'avion qui vole le plus vite est le $avion à $max km/h" . "\n");
    }


    // // Permet ou non de recommencer l'exercice //
    $on = readline("Voulez-vous faire une autre recherche ? (O/N) : ");
    if ($on == "O" or $on == "o") {
        $w = true;
    } else {

        echo ("Au revoir et a bientôt ! ");
        exit;
    }
}
