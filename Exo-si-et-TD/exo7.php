<?php
$XH = readline ("Quelle heure est-il? " );
$XM = readline ("Combien de minute? " );
$XS = readline ("Combien de seconde? " );

if ($XS < 59){   
    
    $XS = ($XS + 1);
    echo(" Il est $XH heures et $XM minutes et $XS secondes");}

elseif ($XS == 59 & $XM < 59) {
    $XS = 00;
    $XM = ($XM +1);
    echo(" Il est $XH heures et $XM minutes et $XS secondes");

}

elseif ($XS == 59 & $XM == 59 & $XH == 23) {
    $XS = 00;
    $XM = 00;
    $XH = 00;
    echo(" Il est $XH heures et $XM minutes et $XS secondes");
}
elseif ($XS == 59 & $XM = 59) {
    $XS = 00;
    $XM = 00;
    $XH = ($XH + 1);
    echo(" Il est $XH heures et $XM minutes et $XS secondes");
}




 
