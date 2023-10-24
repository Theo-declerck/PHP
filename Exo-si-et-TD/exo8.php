<?php
$Xn = readline("Combien de photocopies souhaitez vous? : ");
if ($Xn >= 10) {
    $Xp = 1;
    $Xn = ($Xn - 10);
    if ($Xn > 0 && $Xn < 21) {
        $Xp = ($Xn * 0.09) + $Xp;
        $Xn = ($Xn - 20);
    }
     elseif ($Xn > 20){
        $Xn = ($Xn - 20);
    $Xp = ($Xp + 1.80);
    $Xp = ($Xn * 0.08) + $Xp;
}
} 
elseif ($Xn < 10 && $Xn >0) {
    $Xp = ($Xn * 0.1);
}
echo ("Vous aller payer $Xp €");
