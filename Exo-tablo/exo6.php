<?php
$max=0;
$somme =0;
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    $somme=$somme + $tab[$i];
}
$moyenne = $somme/ count($tab);
foreach($tab as $key => $note){
    if($note> $moyenne){
$max++;
    }
}


echo  ("La moyenne est de $moyenne" ."\n");
echo ("Le nombre de note au dessus de la moyenne est de $max ");