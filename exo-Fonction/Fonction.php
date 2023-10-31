<?php

function TTC($TVA,$article,$HT){

$PHT = $HT * $article;
$TTC =  $PHT *(1 + $TVA*0.01);

echo "Le prix Hors Taxe d'un article est de : " . $HT . "\n";
echo "Le nombre d'article est de : " . $article . "\n";
echo "Le prix Hors Taxe des article est de : " . $PHT . "\n";
echo "Le prix TTC des articles est de : " . $TTC . "\n";
}

function PGCD ($nombre, $nombre2){

$reste=1;
$DIviseur=min($nombre, $nombre2);

while($reste !=0){
    $reste = fmod($nombre, $DIviseur) + fmod($nombre2, $DIviseur);
    $DIviseur--;
}
echo ("Le plus grand diviseur commun est " . $DIviseur +1);
}

function PPCM ($nombre, $nombre2){

$reste=1;
$PGCD=min($nombre, $nombre2);

while($reste !=0){
    $reste = fmod($nombre, $PGCD) + fmod($nombre2, $PGCD);
    $PGCD--;

}
$PGCD++;
$PPCM= (($nombre * $nombre2)/$PGCD);
echo ("Le PPCM commun est $PPCM");
}

function mult($X){
for($i=1 ; $i<=10; $i++){
    $P=$i*$X;
    echo ("$i x $X = $P \n");
}
}

function facto($X){
   
$k=1;

for($i=1 ; $i <=$X; $i++){
    $k=$k*$i;
   
}
echo $k;
}
function somme($notes){
    $somme=0;

$tab = [];
for($i =0 ; $i<$notes ; $i++){
    $tab[$i]=readline("Entrez une notes : ");
    $somme=$somme + $tab[$i];
   
}
echo("La somme des notes est de $somme");
}

function etoile($n){
    for ($i=0;$i<$n;$i++){

        // J étant notre nombre de ligne
        // 1 a 7 étoiles//
        for($j=0; $j<=$i; $j++){
            $tab[$i][$j]= "*";
            echo $tab[$i][$j];      
        }
        echo "\n";
    }
    // de 6 a 1 étoiles//
        for ($i=2;$i<$n+1;$i++){  
       
        for($j=$i; $j<=$n; $j++){
            $tab[$i][$j]= "*";
            echo $tab[$i][$j];      
        }
     
    
        echo "\n";
        
    }
}