<?php ob_start() ?>

<form action="#" method="get">
    <label for="nbnote">Combien de notes : </label>
    <input type="number" name="nbnote" id="nbnote"> </br>
    <input type="submit" name="Valider" value="Valider"></br>
</form>

<?php
if (isset($_GET["Valider"]) && isset($_GET["nbnote"])) {
    $nbnotes = $_GET["nbnote"];
    $notes = [];

    echo "<h2> Résultat </h2>";

    echo '<form action="#" method="post"><fieldset>';
    for ($i = 1; $i <= $nbnotes; $i++) {
        echo 'Entrer la note ' . $i . ': <input type="number" name="notes[]" min="0" max="20"></br>';
    }
    echo '<input type="submit" name="calcul" value="Calculer"></fieldset></form></br>';
    if (isset($_POST["calcul"])) {
        $notes = $_POST["notes"];
        $total = array_sum($notes);
        $moyenne = $total / count($notes);
        echo "La moyenne est : " . $moyenne;
    }
}




?>

<?php
$content = ob_get_clean();
$titre = "Calculer une moyenne";
require "template.php";
?>