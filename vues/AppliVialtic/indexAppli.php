<?php
$vehicules = $connect->query("SELECT * FROM vehicule")->fetchAll();
?>

<div class="container">
    <div class='row'>

        <div class="container">
            <main>
                
                <div class='col-xs-6 col-xs-offset-3'>
                    <img class="img-responsive" src="img/AppliVialtic/bandeau.png"/>   
                </div>
        </div>
        <br>
        <br>
        <div class='row'>
            <div class='col-xs-4 col-xs-offset-3'>
                Voici les vehicules enregistrés :
                <br>

                <form name="vehiculesForm" method = "get" action="">
                    <div class="form form-group">
                    <select name="vehicules" class="form-control">
                        <?php
                        foreach ($vehicules as $vehicule) {
                            echo "<option  value=" . $vehicule['id'] . ">" . $vehicule['immatriculation'] . "</option>";
                        }
                        ?>
                        
                        <input type="submit" name="soumettreVehicule"  class="submit btn btn-primary btn-m" value="OK" >
                    </select>
                    </div>
                </form>


                </main>
            </div>
        </div>

    </div>
    <?php
    ?>