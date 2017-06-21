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
                    foreach ($vehicules as $vehicule) {
                        echo "<a href=vehicule/".$vehicule['id'].">";
                        echo $vehicule['immatriculation'] ."<br>";
                        echo '</a>';
                        
                    }
                    
                    ?>


                </main>
            </div>
        </div>
    </div>