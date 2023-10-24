<?php
$J =readline("Quelle est la date du jour ? ");
$M =readline("Quelle mois sommes nous ? ");
$A =readline (" En quelle années somme nous ?");

if  ( ($A % 4 == 0) && (($A % 100) !== 0) xor (($A % 400) == 0)){ 
    echo(" année bissextile");}

    else {

        echo ("Année non bissextile");
    }
