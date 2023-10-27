<?php
$nombre =readline("Nombre 1 : ");
$nombre2 =readline("nombre B : ");
$reste=1;
$DIviseur=min($nombre, $nombre2);

while($reste !=0){
    $reste = fmod($nombre, $DIviseur) + fmod($nombre2, $DIviseur);
    $DIviseur--;
}
echo ("Le plus grand diviseur commun est $DIviseur");



