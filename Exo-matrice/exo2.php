<?php
// I etant notre nombre de colone//
for ($i=0;$i<7;$i++){

    // J étant notre nombre de ligne
    // 1 a 7 étoiles//
    for($j=0; $j<=$i; $j++){
        $tab[$i][$j]= "*";
        echo $tab[$i][$j];      
    }
    echo "\n";
}
// de 6 a 1 étoiles//
    for ($i=2;$i<8;$i++){  
   
    for($j=$i; $j<=7; $j++){
        $tab[$i][$j]= "*";
        echo $tab[$i][$j];      
    }
 

    echo "\n";
    
}