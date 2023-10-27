<?php
$max=0;
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    
    if ($tab[$i]>$max){
    $max = $tab[$i];
    $ligne=$i+1;
    }
 
    
}
echo ("La valeur max est $max en ligne $ligne");

