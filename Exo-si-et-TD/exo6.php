<?php
$XH = readline ("Quelle heure est-il?");
$XM = readline ("Combien de minute?");

if ($XM == 59 & $XH < 23){   
    $XH = 1 + $XH;
    $XM = 00;
    echo(" Il est $XH heures et $XM minutes");}

elseif ($XH == 23 & $XM == 59) {
    $XH = 00 ;
    $XM = 00 ;
    echo(" Il est $XH heures et $XM minutes");
}



 
elseif ($XM < 59 ){
    $XM = ($XM + 1);
    echo(" Il est $XH heures et $XM minutes");
}
    

   
