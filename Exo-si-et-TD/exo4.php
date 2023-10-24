<?php

$Xa = readline("Entrez un premier chiffre: ");
$Xb = readline("Entrez un second chiffre: ");
if ($Xa == 0 or $Xb == 0)
    echo ("Votre produit est null");

else
if (($Xa < 0 & $Xb < 0) or ($Xa > 0 & $Xb > 0))
    echo ("Votre produit est Positif");

else
    echo ("Votre produit est Négatif");
