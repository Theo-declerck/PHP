<?php
$A = 1;
$B = 2;
$C = 3;
$D = $A;
$A = $C;
$C = $B;
$B = $D;
echo "La valeur de A est de : " .$A ."\n";
echo "La valeur de B est de : " .$B ."\n";
echo "La valeur de C est de : " .$C ."\n";