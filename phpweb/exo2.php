<?php ob_start()?>
<form action="#" method="post">
    <label for="table">Hauteur de la pyramide : </label>
    <input type="number" name="table" id ="table">
    <input type="submit" value="Envoyer">
</form>
<div class="etoile">
    <?php
    if (isset($_POST["table"])){
        echo "<h2>Pyramide de hauteur" . $_POST["table"]."</h2>";
        for ($i=0;$i< $_POST["table"];$i++){

            // J étant notre nombre de ligne
            // 1 a 7 étoiles//
            for($j=0; $j<=$i; $j++){
                $tab[$i][$j]= "*";
                echo $tab[$i][$j] ;      
            }
            echo "<br/>";
        }
        // de 6 a 1 étoiles//
            for ($i=2;$i< $_POST["table"]+1;$i++){  
           
            for($j=$i; $j<= $_POST["table"]; $j++){
                $tab[$i][$j]= "*";
                echo $tab[$i][$j] ;      
            }
         
        
            echo "<br/>";
            
        }
    }
    ?>
</div>
<?php
$content =ob_get_clean();
$titre = "Affichage d'une pyramide";
require "template.php";
?>