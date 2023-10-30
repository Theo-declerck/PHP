<?php
$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$estVrai = true;
$j = count($tab) -1;

while ($estVrai) {
    $estVrai = false;
    for ($i = 0; $i < count($tab) -5; $i++) {

        $temp = $tab[$i];
        $tab[$i] = $tab[$j];
        $tab[$j] = $temp;

        $j--;
    
    }
}

foreach ($tab as $value) {
    echo $value . "\n";
}
