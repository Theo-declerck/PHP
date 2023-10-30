<?php

$cours = ["boucher" =>16, "Bourdette" => 13, "Millet" =>18, "Brunet" =>2, "Bourbeau" =>14,"Lortie" =>10 ];
foreach($cours as $nom =>$notes){
    echo "$nom . $notes" ."\n";
}

foreach($cours as $nom =>$notes){
    $prd= array_sum($cours);
    $moyenne= $prd / count($cours);
    echo ("La moyenne est de $moyenne");
    break;
}




