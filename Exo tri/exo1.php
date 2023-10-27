<?php
$c=0;
$notes= readline("Combien de valeur allez vous saisir : ");
$tab = [];
$tab[0]=readline("Entrez une valeur : ");
for($i =0 ; $i<$notes-1 ; $i++){
   $tab[$i+1]=readline("Entrez une valeur : ");
   if ((($tab[$i+1] - $tab[$i]) == 1) or (($tab[$i] - $tab[$i+1]) == 1)){
   $c++;
}

}
if ($c == $i){
    echo (" Tout est consécutif");
}
else{
    echo (" Tout n'est pas consécutif");
}


