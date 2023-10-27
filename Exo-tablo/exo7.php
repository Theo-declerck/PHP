<?php
$max=0;
$somme =0;
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
$tab2 =[];
$tab3=[];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez un prix : ");
    $tab2[$i]=readline ("Entre une quantité");
    $tab3[$i]= $tab[$i] *  $tab2[$i] ;
    $somme=$somme + $tab3[$i];
}




echo("$somme");