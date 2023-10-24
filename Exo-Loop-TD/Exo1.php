<?php

$E = (int)readline("Entrez un chiffre : " );

while ($E < 1 or $E > 3) {

    echo ("Essaye encore" ."\n");
    $E = (int)readline("Entrez un chiffre ");
}

echo ("OK");
