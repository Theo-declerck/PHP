<?php

$Xa = readline("Entrez un chiffre: " );
$Xb = readline("Entrez un chiffre: " );

if (($Xa <0 & $Xb <0) or ($Xa >0 & $Xb >0) )
    echo ("Votre produit est Positif");

else
    echo ("Votre produit est Négatif");
    
