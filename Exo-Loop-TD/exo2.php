<?php
$E = (int)readline("Entrez un chiffre : ");

while ($E < 10 or $E > 20) {

    if ($E < 10) {
        echo ("PLus grand" . "\n");
        $E = (int)readline("Entrez un chiffre ");
    } else {
        echo ("Plus petit" . "\n");
        $E = (int)readline("Entrez un chiffre ");
    }
}

echo ("OK");
