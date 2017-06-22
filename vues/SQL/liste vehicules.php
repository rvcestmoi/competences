<?php
$vehicules = $connect->query("SELECT * FROM vehicule")->fetchAll();
?>

<div class="container">
    <div class='row'>
        <div class='col-xs-6 col-xs-offset-3'>
            <div class="container">
                <main>
                    Voici les vehicules enregistrés :
                    <br>

                    <?php
                    echo '<form name="vehiculesForm" method = "get" action="">';
                    echo '<select name="vehicules">';
                    foreach ($vehicules as $vehicule) {
                        echo "<option value=" . $vehicule['id'] . ">" . $vehicule['immatriculation'] . "</option>";
                    }
                    echo '<input type="submit" name="soumettreVehicule" value="OK" >';
                    echo '</select>';
                    echo "</form>"
                    ?>

                </main>
            </div>
        </div>
    </div>
</div>
<?php

?>