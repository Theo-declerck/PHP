<?php
$tab = [];
$max=0;
for ($i=1;$i<=13;$i++){
    for($j=1; $j<=8; $j++){
        $tab[$i][$j]= rand(0,1000);
        echo $tab[$i][$j] ."/";
        if($max < $tab[$i][$j]){
            $max =$tab[$i][$j];
        }
       
    }
    echo "\n";
    
}
echo ("la valeur max est  $max");
