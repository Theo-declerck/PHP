<?php
$somme=0;
$notes= readline("Combien de notes allez vous saisir : ");
$tab = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    $somme=$somme + $tab[$i];
   
}
echo("La somme des notes est de $somme");