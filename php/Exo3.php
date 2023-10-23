<?php
$X = 54;
$Y = 102;
$Z = $Y;
$Y = $X;
$X = $Z;

echo "La valeur de X est de : " .$X ."\n";
echo "La valeur de Y est de : " .$Y ."\n";