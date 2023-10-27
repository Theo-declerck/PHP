<?php
// Tri a bulle //
// $estVrai=true;
$tab = [8,4,5,6,2,9];
// while($estVrai){
//     $estVrai=false;
//     for($i =0 ; $i <=count($tab)-2 ; $i++){
        
//         if($tab[$i] < $tab[$i+1]){
//             $temp = $tab[$i];
//             $tab[$i] = $tab[$i+1];
//             $tab[$i+1] = $temp;
//             $estVrai= true;
//         }
       
//      }
// }
// foreach($tab as $value){
//     echo $value . "\n";
// }
// --------------------------------------//
// Tri par selection//
for ($i=1;$i=$n-1;$i++){
    $min = $i;
    for($j = $i+1 ; $j=$n;$j++){
        if($tab[$j] < $tab[$min]){
            $min = $j;
        }
    }
    $temp = $tab[$min];
    $tab[$min]= $tab[$i];
    $tab[$i]=$temp;
}
foreach($tab as $value){
    echo $value . "\n";
}





