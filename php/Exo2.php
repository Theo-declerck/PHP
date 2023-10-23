<?php
$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;
echo "La valeur de A est de : " .$A ."\n";
echo "La valeur de B est de : " .$B ."\n";
echo "La valeur de C est de : " .$C ."\n";