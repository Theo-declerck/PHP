<?php
$o = 0; // compteur Ordi//
$p = 0; // compteur joueur//

$w = true;


while ($w = true) {
    $w = false;
    for ($i = 1; $i <= 4; $i++) {
    
        echo ("Partie $i" . "\n");
        for ($k = 1; $k <= 3; $k++) {
            $utilisateur = readline("Manche $k : Choissisez : Pierre / Papier / Ciseaux ? ");
            $ia = rand(1, 3);  //1=Pierre  / 2=Papier / 3=Ciseaux //


            if (($ia == 1) and (($utilisateur == "Pierre") or ($utilisateur == "pierre"))) {    //Si l'ordinateur choisi pierre //
                echo ("L'ordinateur a choisi Pierre" . "\n");
                echo (" Résultat: Partie null !" . "\n");
            } elseif (($ia == 1) and ($utilisateur == "Papier") or ($utilisateur == "papier")) {
                echo ("L'ordinateur a choisi Pierre" . "\n");
                echo ("Résultat: Joueur Gagne" . "\n");
                $p++;
            } elseif (($ia == 1) and ($utilisateur == "Ciseaux") or ($utilisateur == "ciseaux")) {
                echo ("L'ordinateur a choisi Pierre" . "\n");
                echo ("Résultat: Ordinateur Gagne" . "\n");
                $o++;
            } elseif (($ia == 2) and ($utilisateur == "Pierre") or ($utilisateur == "pierre")) {    // Si l'odinateur choisi Papier //
                echo ("L'ordinateur a choisi Papier" . "\n");
                echo ("Résultat: Ordinateur Gagne" . "\n");
                $o++;
            } elseif (($ia == 2) and ($utilisateur == "Papier") or ($utilisateur == "papier")) {
                echo (" L'ordinateur a choisi Papier" . "\n");
                echo ("Résultat: Partie null !" . "\n");
            } elseif (($ia == 2) and ($utilisateur == "Ciseaux") or ($utilisateur == "ciseaux")) {
                echo ("L'ordinateur a choisi Papier" . "\n");
                echo ("Résultat: Joueur Gagne" . "\n");
                $p++;
            } elseif (($ia == 3) and ($utilisateur == "Pierre") or ($utilisateur == "pierre")) {    // Si l'odinateur choisi Ciseaux //
                echo ("L'ordinateur a choisi Ciseaux" . "\n");
                echo ("Résultat: Joueur Gagne" . "\n");
                $p++;
            } elseif (($ia == 3) and ($utilisateur == "Papier") or ($utilisateur == "papier")) {
                echo ("L'ordinateur a choisi Ciseaux" . "\n");
                echo ("Résultat: Ordianteur Gagne !" . "\n");
                $o++;
            } elseif (($ia == 3) and ($utilisateur == "Ciseaux") or ($utilisateur == "ciseaux")) {
                echo ("L'ordinateur a choisi Ciseaux" . "\n");
                echo ("Résultat: Partie null" . "\n");
            }elseif (($utilisateur !="Papier") or ($utilisateur !="papier") or ($utilisateur !="Feuille") or ($utilisateur !="feuille") or ($utilisateur !="Ciseaux") or ($utilisateur !="ciseaux")){
                echo ("Choix Invalide" ."\n");
            }
            
        }
        echo ("Score après la manche 3 : Joueur ($p) - Ordinateur ($o)" . "\n");
        
        $file = "file.txt";
       
        $fileopen = (fopen($file, 'a'));
        
        fwrite($fileopen, "Score après la manche 3 de la partie $i : Joueur ($p) - Ordinateur ($o)" . "\n");

        // Permet de rejouer //
        $on = readline("Voulez-vous rejouer ? (O/N) : ");
        if ($on == "O" or $on == "o") {
            $w = true;
            $o=0;
            $p=0;
        } else {
            $w = false;
            echo ("Au revoir et a bientôt ! ");
            exit;
        }
    }
}
