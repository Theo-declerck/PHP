<?php

$eleves = ["Prenot" => array(2, 10, 14), "Perthuis" => array(10, 18, 12), "Dupon" => array(12, 13, 10, 9), "Sukki" => array(17, 15, 16, 18)];
echo("Exercice 1) Nom et notes de chaque élève. \n");
echo("Exercice 2) Nom et moyenne de chaque élève. \n");
echo ("Exercice 3) Rechercher un nom et afficher ses notes et sa moyenne. \n");
echo("Tapez 0 pour quitter le programme " . "\n");
$exo = readline("Entrez le numero de l'exercice : \n" );
 
 


if ($exo == 1) {
    // 3.1//
    echo ("Nom et notes de chaque élève : ↲ ". "\n");
    foreach ($eleves as $nom => $notes) {
        echo "$nom : ";
        foreach ($notes as $note) {
            echo  "$note, ";
        }
        echo "\n";
    }
    // 3.1 //
}
// -----------------//
elseif ($exo == 2) {
    // 3.2//
 echo (" Nom et moyenne de chaque élève :  ". "\n");
    foreach ($eleves as $nom => $notes) {
        echo "$nom : ";
        foreach ($notes as $note) {
            $moyenne = array_sum($notes) / count($notes);
            echo $moyenne;
            break;
        }
        echo "\n";
    }
    // 3.2//
}

// ------------------------//
elseif ($exo == 3) {
    // 3.3//
    echo("Recherche de l'élèves et affichage nom/notes/moyenne : ". "\n");
    $recherche = readline("Entrez le nom de l'eleve : ↲ " . "\n");
    foreach ($eleves as $nom => $notes) {

        if ($recherche == $nom) {
            echo "Les notes sont  : ";
            foreach ($notes as $note) {
                echo "$note,  ";
            }
            echo "\n";

            $moyenne = array_sum($notes) / count($notes);
            echo "La moyenne est $moyenne" . "\n";
        }
    }
    // 3.3//
}
elseif($exo == 0 ){
    echo ("Fin");
    
}
elseif($exo!=0 and $exo !=1 and $exo!=2 and $exo !=3){
    echo("Aucun exercices correspondant");
}
