<?php
require "Fonction.php";
echo ("Bienvenue " . "\n");
echo ("Voici une liste des exercices." . "\n");
echo (" 
1) Calcul d'un prix TTC en fonction de 3 parametres. \n
2) Calcul du PGCD. \n
3) Calcul du PPCM. \n 
4) Affichage d'un table de multiplication. \n 
5) Calcul de la factorielle d'un nombre. \n 
6) Calcul de la somme des valeur d'un tableau. \n
7) Affichage d'une pyramide d'étoiles selon le nombre de ligne demandée. \n
                   Appuyer sur 0 pour quitter  \n
");
$estvrai=true;
while ($estvrai=true){

$Question = readline("Quel exercice souhaitez vous afficher? . \n
");

switch ($Question) {
    case 1:
        echo(" Bienvenue dans l'exercice Calcul d'un prix TTC en fonction de 3 parametres.  \n        ");
        $HT = readline("Prix d'un article : ");
        $article = readline("Nombre d'articles : ");
        $TVA = readline("TVA en Pourcentage : ");
        TTC($TVA, $HT, $article);
        break;

    case 2:
        echo ("Bienvenue dans l'exercice Calcul du PGCD.  \n        ");
        $nombre = readline("Nombre 1 : ");
        $nombre2 = readline("nombre 2 : ");
        PGCD($nombre, $nombre2);
        break;

    case 3:
        echo ("Bienvenue dans l'exercice Affichage d'un table de multiplication.  \n        ");
        $nombre = readline("Nombre 1 : ");
        $nombre2 = readline("nombre B : ");
        PPCM($nombre, $nombre2);
        break;

    case 4:
        echo ("Bienvenue dans l'exercice Calcul du PGCD.  \n        ");
        $X = readline("Quelle table souhaitez vous afficher ? ");
        mult($X);
        break;

    case 5:
        echo ("Bienvenue dans l'exercice Calcul de la factorielle d'un nombre. \n        ");
        $X = readline("Entrez un chiffre: ");
        facto($X);
        break;

    case 6:
        echo ("Bienvenue dans l'exerciceCalcul de la somme des valeur d'un tableau. \n        ");
        $notes = readline("Combien de notes allez vous saisir : ");
        somme($notes);
        break;

    case 7:
        echo("Affichage d'une pyramide d'étoiles selon le nombre de ligne demandée. \n        ");
        $n = readline("Combien de ligne souhaitez vous ? ");
        etoile($n);
        break;

    case 0:
        echo ("Au revoir");
        exit;
}
}