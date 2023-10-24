<?php
$S = readline("Homme ou Femme ? ");
$A = readline("Quel âge avez vous? " );
if (($S == "Homme" & $A > 20) or ($S == "Femme" & $A >= 18 & $A <= 35)) {
    echo ("Vous payer des impots");
} 
else {
    echo ("Vous ne payer pas d'impots");
}
