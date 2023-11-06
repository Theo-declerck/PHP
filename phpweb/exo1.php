<?php ob_start()?>
<form action="#" method="post">
    <label for="table">Table de multiplication : </label>
    <input type="number" name="table" id ="table">
    <input type="submit" value="Envoyer">
</form>
<div class="multi">
    <?php

    if (isset($_POST["table"])){
        echo "<h2> La table de ". $_POST["table"]."</h2>";
        for ($i=1 ; $i<=10 ; $i++){
            echo $i . "*". $_POST["table"] . "=" . $i*$_POST["table"] . "<br/>";
        }
    }else{
        echo "<h2> Saisir une valeur dans le champ ci-dessus</h2>";
    }
    ?>
</div>
<?php
$content =ob_get_clean();
$titre = "Table de multiplication";
require "template.php";
?>