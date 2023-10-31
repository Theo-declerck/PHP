<?php
require "fonction.php";

$choix = readline("Veuillez choisir votre exo :\n");

switch ($choix){
    case 1 :
        alea();

    case 2 :
        alea2();

    case 3 :
        echo "Veuillez repondre par true pour oui et false pour non . \n";
        $moust=readline("Votre personnage a-t-il des moustache ? ");
        $lun=readline("Votre personnage a-t-il des lunettes ?");
        $chap=readline("Votre personnage a-t-il un chapeau ?");
        $homme=readline("Votre personnage est-il un homme ?");
        cluedo($moust,$chap,$lun,$homme);
} 