<?php
$w = true;
echo ("       Racine de  l'équation du 2nd degré " . "\n");
echo ("                 Y= ax²+ bx + c " . "\n");
while ($w == true) {
    $w = false;

    $a = readline("Quel est la valeur de a : ");
    $b = readline("Quel est la valeur de b : ");
    $c = readline("Quel est la valeur de c : ");

    $delta = ($b * $b) - 4 * $a * $c;  // Calcul du delta //

    // Possibilité selon le delta //
    if (($a == 0 and $b == 0) or ($a == 0 and $c == 0) or ($b == 0 and $c == 0)) {
        echo ("L'équation n'en est plus une ! ! ! " . "\n");
    } elseif (($a == 0) or ($b == 0) or ($c == 0)) {
        $x = - ($c / $b);
        echo ("L'équation est du 1er degré ! " . "\n");
        echo (" L'équation s'annule pour x= -(c/b): $x" . "\n");
    } elseif ($delta < 0 and ($a != 0 or $b != 0 or $c != 0)) {
        echo ("L'équation ne possède pas de racine réelle : " . "\n");
        echo "d= $delta" . "\n";
    } elseif ($delta == 0 and ($a != 0 or $b != 0 or $c != 0)) {
        $x1 = - ($b / (2 * $a));
        $x2 = $x1;
        echo ("L'équation possède une racine double : " . "\n");
        echo "d= $delta" . "\n";
        echo (" x1 = x2 = $x1" . "\n");
    } else if ($delta > 0 and ($a != 0 or $b != 0 or $c != 0)) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("L'équation possède deux racine distinctes : " . "\n");
        echo "d= $delta" . "\n";
        echo ("x1= $x1" . "\n");
        echo ("x2= $x2" . "\n");
    }
    // Permet ou non de recommencer l'exercice //
    $on = readline("Voulez-vous faire un autre calcul ? (O/N) : ");
    if ($on == "O" or $on == "o") {
        $w = true;
    } else {

        echo ("Au revoir et a bientôt ! ");
        exit;
    }
}
