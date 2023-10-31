<?php
function alea()
{
    $nb = rand(1, 20);
    echo "$nb \n";
    switch ($nb) {
        case ($nb > 15 && $nb < 21):
            echo "Il est compris entre 16 et 20";
            break;

        case ($nb > 10 && $nb < 16):
            echo "Il est compris entre 11 et 15";
            break;

        case ($nb > 5 && $nb < 11):
            echo "Il est compris entre 6 et 10";
            break;

        case ($nb > 0 && $nb < 6):
            echo "Il est compris entre 1 et 5";
            break;
    }
}
function alea2()
{
    $nb = rand(0, 20);
    echo "Le nombre est : $nb \n";
    switch ($nb) {
        case ($nb < 7):
            echo "Bonjour";
            break;

        case ($nb > 6 && $nb < 14):
            echo "Salut";
            break;

        case ($nb > 13):
            echo "Hello";
            break;
    }
}
function cluedo($moust, $lun, $chap, $homme)
{
    $moust=readline("Votre personnage a-t-il des moustache ? ");
    $lun=readline("Votre personnage a-t-il des lunettes ?");
    $chap=readline("Votre personnage a-t-il un chapeau ?");
    $homme=readline("Votre personnage est-il un homme ?");
    $r = 0;
    $m = 0;
    $v = 0;
    $o = 0;
    $l = 0;
    if ($moust) {
        $m = $m + 2;
        $r--;
        $v--;
        $o--;
        $l--;
    } else {
        $r++;
        $v++;
        $o++;
        $l++;
        $m--;
    }
    echo "V,$v/O,$o/M,$m/R,$r/L,$l \n";
    if ($chap) {
        $v++;
        $r--;
        $m--;
        $o--;
        $l--;
        echo $v;
    } else {
        $r++;
        $m++;
        $o++;
        $l++;
        $v = -100;
        echo $v;
    }
    if ($lun) {
        $v++;
        $o++;
        $l++;
        $m++;
        $r--;
    } else {
        $r++;
        $v--;
        $o--;
        $l--;
        $m--;
    }
    echo "V,$v/O,$o/M,$m/R,$r/L,$l \n";

    echo "V,$v/O,$o/M,$m/R,$r/L,$l \n";
    if ($homme) {
        $v++;
        $o++;
        $m++;
        $l--;
        $r--;
    } else {
        $l++;
        $r++;
        $v--;
        $o--;
        $m--;
    }
    echo "V,$v/O,$o/M,$m/R,$r/L,$l \n";
    if (max($r, $v, $o, $m, $l) == $m) {
        echo "Votre personnage est Colonel Moutarde";
    } elseif (max($r, $v, $o, $m, $l) == $r) {
        echo "Votre personnage est Mlle Rose";
    } elseif (max($r, $v, $o, $m, $l) == $o) {
        echo "Votre personnage est Reverand Olive";
    } elseif (max($r, $v, $o, $m, $l) == $l) {
        echo "Votre personnage est Mme Leblanc";
    } elseif (max($r, $v, $o, $m, $l) == $v)
        echo "Votre personnage est Professeur Violet";
}
