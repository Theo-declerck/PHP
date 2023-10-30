<?php
$tab = [ "avoir", "etre", "serait", "pouvoir", "demander", "manger"];
$dict=readline("Cherchez un mot : ");


for ($i=0;$i <=count($tab)-1;$i++){
    if( $dict == $tab[$i]){
    echo (" mot trouver en " . $i+1 . " position "  );}
    else{
        echo ("Le mot rechercher n'est pas dans ce dico");
        break;
    }
}

