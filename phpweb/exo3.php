<?php ob_start()?>
<form action="#" method="post">
    <label for="rayon">Rayon : </label>
    <input type="number" name="rayon" id ="rayon"> </br>
    <label for="Perimetre"> Périmètre : </label>
    <input type="checkbox" name="Perimetre" id="Perimetre"></br>
    <label for="Aire"> Aire : </label>
    <input type="checkbox" name="Aire" id="Aire"> </br>
    <input type="submit" value="Envoyer">
</form>
<div class="multi">
    <?php
    echo "<h2> Résultat </h2>";
    if (isset($_POST["rayon"])){
            $circ = ($_POST["rayon"] * 2) * M_PI; 
            $surf = ($_POST["rayon"] * $_POST["rayon"]) * M_PI;

        if (isset ($_POST["Perimetre"])){
            echo ("Son périmètre est de               : $circ" . "\n");
        }
        echo "</br>";
        if (isset ($_POST["Aire"])){
            echo ("Son aire est de                     : $surf" . "\n");
        }
            
           
            
        
           
        
    }
    ?>
</div>
<?php
$content =ob_get_clean();
$titre = " Cercle - Aire et périmètre ";
require "template.php";
?>