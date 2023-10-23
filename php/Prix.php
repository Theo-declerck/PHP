<?php
$HT = readline("Prix d'un article : ");
$article = readline("Nombre d'articles : ");
$TVA = readline("TVA en Pourcentage : ");
$PHT = $HT * $article;
$TTC =  $PHT *(1 + $TVA*0.01);

echo "Le prix Hors Taxe d'un article est de : " . $HT . "\n";
echo "Le nombre d'article est de : " . $article . "\n";
echo "Le prix Hors Taxe des article est de : " . $PHT . "\n";
echo "Le prix TTC des articles est de : " . $TTC . "\n";






