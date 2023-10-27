<?php
$somme=[];
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
$tabb = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    $tabb[$i]=readline("Entrez une notes tableau 2 : ");
    $somme[$i]=$tabb[$i] + $tab[$i];
}
foreach ($somme as $key => $value)



echo ("Ligne : $value") . "\n";