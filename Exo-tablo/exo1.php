<?php
$tab = [1,1,1,1,1,1,1,1,1];
$somme=0;
for($i =0; $i<count($tab);$i++){
    $tab[$i]=readline("Entrez une notes : ");
    $somme=$somme + $tab[$i];
}
$moyenne = $somme/ count($tab);
echo ("La moyenne est de $moyenne");