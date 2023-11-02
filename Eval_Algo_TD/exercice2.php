<?php
$w = true;
echo ("       **** Table de multiplication**** " . "\n");
while ($w == true) {
    $X = readline("Entrez le nombre pour lequel vous voulez la table de multiplication : ");
    for ($i = 1; $i <= 10; $i++) { // Multiplie pas i le nombre de l'utilisateur //
        $P = $i * $X;
        echo ("$X      x $i          = $P \n");
    }

    $on = readline("Voulez-vous faire un autre calcul ? (O/N) : "); // Nous permet de recommencer l'exercice //
    if ($on == "O" or $on == "o") {
        $w = true;
    } else {

        echo ("Au revoir et a bientôt ! ");
        exit;
    }
}
