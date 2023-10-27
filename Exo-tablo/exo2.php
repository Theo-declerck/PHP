<?php
$p=00;
$n=00;
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    if($tab[$i]>=0){
        $p++;
    }
    elseif($tab[$i]<0){
        $n++;
    }
   
}
echo("Il y a $p nombres positif et $n nombres négatif");