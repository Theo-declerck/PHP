<?php
$chomage = ["Autriche" => 4.9, "Allemagne" => 9.3, "Danemark" => 4.8, "Espagne" => 9.4, "France" => 9.7];
// foreach( $chomage as $pays => $taux){
//     echo "$pays : $taux" . "\n";
// } 

//1.1//

// foreach($chomage as $pays => $taux){
//     if($taux <5){
//         echo "$pays avec $taux" ."\n";
//     }
// }
//1.2//
asort($chomage);
foreach ($chomage as $pays => $taux) {
    if (min($chomage)) {
        echo $pays . "\n";
    }

    break;
}
