<?php ob_start();
session_start(); ?>

<form action="#" method="post">
    <input type="reset" value="Reinitialiser"> </br>
    <label for="Chiffre">Quel est le chiffre : </label>
    <input type="number" name="Chiffre" id="Chiffre"> </br>

    <input type="submit" name="Valider" value="Valider"></br>


</form>
<div class="multi">
    <?php


    if (empty($_SESSION["rand"])) {
        $_SESSION["rand"] = rand(0, 20);
    } else {
        if (isset($_POST["Chiffre"])) {
            if ($_POST["Chiffre"] <  $_SESSION["rand"]) {
                echo ("C'est plus grand" . "\n");
                echo "\n";
            } elseif ($_POST["Chiffre"] >  $_SESSION["rand"]) {
                echo ("C'est plus petit" . "\n");
                echo "\n";
            } elseif ($_POST["Chiffre"] ==  $_SESSION["rand"]) {
                echo ("Bien joué");
                session_destroy();
            }
        }
    }
    echo $_SESSION["rand"];
    ?>
</div>
<?php
$content = ob_get_clean();
$titre = " Trouver le nombre choisi par l'ordinateur ";
require "template.php";
?>