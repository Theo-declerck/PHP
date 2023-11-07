<?php ob_start() ?>
<link rel="stylesheet" href="style.css">
<div class="body">
    <div class="devise">
        <form action="#" method="get">
            <label for="montant">Montant (€) : </label>
            <input type="number" name="montant" id="montant" min="0"> </br></br>
            <label for="conv">Convertir en : </label>
            <select name="devise" id="devise-select">
                <option> Dollars</option>
                <option> Rouble</option>
                <option> Livres (Sterling)</option>
                <option> Yen</option>
                <option> Franc</option>
                <option> Dinnars</option>
                <option> Shilling</option>
                <option> Roupie Mauricienne</option>
                <option> Couronne</option>
                <option> Ecue</option>
            </select> </br></br>
            <label for="res">Résultat : </label>
           
            <input type="submit" name="Valider" value="Convertir"></br>
        
        <?php
        $devise = ["Dollars" => 1.07, "Rouble" => 99.14, "Livres (Sterling)" => 0.87, "Yen" => 160, "Franc" => 0.96, "Dinnars" => 144.75, "Shilling" => 612.22, "Roupie Mauricienne" => 47.33, "Couronne" => 6.35, "Ecue" => 3.5];
        if (isset($_GET["Valider"])) {
            $prix = $_GET["montant"] * $devise[$_GET["devise"]];
             echo '<textarea name="res" readonly>'.$prix.'</textarea>' ;
        }
        ?>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
$titre = "Calcul de devise";
require "template.php";
?>

