<?php
$nombre =readline("Nombre 1 : ");
$nombre2 =readline("nombre B : ");
$reste=1;
$PGCD=min($nombre, $nombre2);
$PPCM;

while($reste !=0){
    $reste = fmod($nombre, $PGCD) + fmod($nombre2, $PGCD);
    $PGCD--;

}
$PGCD++;
$PPCM= (($nombre * $nombre2)/$PGCD);
echo ("Le PPCM commun est $PPCM");