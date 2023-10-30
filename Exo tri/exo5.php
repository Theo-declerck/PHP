<?php
$c = 0;
$taille= readline("Combien de valeur allez vous saisir : ");
$tab = [];
$tab[0] = readline("Entrez une valeur : ");

for ($i = 0; $i <= $taille - 1; $i++) {
    $tab[$i+1] =readline(("Entrez une valeur"));
    $min = $i;
    for ($j = 0; $j + 1 <= $taille; $j++) {
        if ($tab[$j] < $tab[$min]) {
            $min = $j;

            $temp = $tab[$min];
            $tab[$min] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
}
foreach ($tab as $value) {
    echo $value . "\n";
}
