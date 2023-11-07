<?php ob_start() ?>
<link rel="stylesheet" href="style.css">
<div class="body6-2">
    <fieldset>
        <h2>Recherche d'emploi:</h2>
        <h3>Remplir la fiche</h3>
        <form action="#" method="post">
            <div class="h">
                <div class="prenom">
                    <label for="Prenom">Prénom :</label>
                    <input type="text" name="prenom">
                </div>
                <div class="nom">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom">
                </div>
                <div class="naissance">
                    <label for="naissance">Naissance :</label>
                    <input type="date" name="naissance" id="datetime" />
                </div>
                <div class="email">
                    <label for="Email">Email :</label>
                    <input type="email" name="email">
                </div>
            </div>

            <div class="b">
                <div class="langue">
                    <label for="langue">Langues pratiqué :</label>
                    <select name="langue" multiple>
                        <option value="Allemand">Allemand</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Arabe">Arabe</option>
                        <option value="Chinois">Chinois</option>
                        <option value="Espagnol">Espagnol</option>
                        <option value="Français">Français</option>
                        <option value="Italien">Italien</option>
                        <option value="Japonais">Japonais</option>
                    </select>
                </div>
                
                <div class="competence">
                    <h4>Compétence informatiques : </h4>
                    <?php
                    $comp = [];
                    echo "<label>HTML 5</label>";
                    echo '<input type="checkbox" name="comp[]" value="HTML 5">';
                    echo '<label for="CSS">CSS 3</label>';
                    echo '<input type="checkbox" name="comp[]" value="CSS 3">';
                    echo '<label for="javascript">Javascript</label>';
                    echo '<input type="checkbox" name="comp[]" value="Javascript">';
                    echo '<label for="jquerry">JQuerry</label>';
                    echo '<input type="checkbox" name="comp[]" value="JQuerry">';
                    echo '<label for="ajax">AJAX</label>';
                    echo '<input type="checkbox" name="comp[]" value="AJAX">';
                    echo '<label for="php">PHP</label>';
                    echo '<input type="checkbox" name="comp[]" value="PHP">';
                    echo '<label for="mysql">MySQL</label>';
                    echo '<input type="checkbox" name="comp[]" value="MySQL">';
                    echo '<label for="jee">JEE</label>';
                    echo '<input type="checkbox" name="comp[]" value="JEE">';
                    echo '<label for="aspnet">ASP.Net</label>';
                    echo '<input type="checkbox" name="comp[]" value="ASP.NET">';
                    ?>
                </div>
                <div class="bouton">
                    <input type="reset" name="reset" value="Effacer">
                    <input type="submit" name="envoyer" value="Envoyer">
                </div>
            </div>
        </form>
    </fieldset>
    <div class="res">
        <h2>Les informations envoyées sont :</h2>
        <?php
        if (isset($_POST["envoyer"])) {
            $comp = $_POST["comp"];
            echo "Le prénom : " . $_POST["prenom"] . "<br>";
            echo "Le nom : " . $_POST["nom"] . "<br>";
            echo "La date de naissance : " . $_POST["naissance"] . "<br>";
            echo "L'email : " . $_POST["email"] . "<br>";
            echo "langue pratiqué : " . $_POST["langue"]. "<br>";
            echo "Les compétence :" . "<br>";
            foreach($comp as $competence =>$k){
                echo $k .",";
            }
        }
        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
$titre = "Formulaire Emploie";
require "template.php";
?>