<?php

$X = readline("Entrez un chiffre: " );

if ($X < 0)
    echo ("Votre nombre est négatif");

else
if ($X > 0)
    echo ("Votre nombre est positif");

else
    echo ("Votre nombre est null");