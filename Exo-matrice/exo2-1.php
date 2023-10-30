<?php
// I etant notre nombre de colone//
$n=readline("Valeur:");

for($i=0; $i<$n; $i++){
    for($j=0; $j<=$i; $j++){
        if($j == 0 or  $j== $i or $i==$n-1){
            echo"X";
        }
        else{
            echo "0";
        }
    }
    
echo "\n";
}