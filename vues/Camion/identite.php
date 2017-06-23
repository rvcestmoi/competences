<?php
$vehicule = $connect->query("SELECT * FROM vehicule where vehicule.id=" . $_GET['vehicules'])->fetch();
$entretiens = $connect->query("SELECT * FROM entretien where vehicule=" . $_GET['vehicules']." ORDER BY dateEntretien DESC")->fetchAll();
//var_dump($entretiens);
?>

<div class="container">

    <div class="presentation jumbotron">
        <div class="row">
            <div class="col-md-6">

                <div class='col-xs-2'>
                    <img class="img-responsive" src="img/AppliVialtic/CamionFlatdesign.png" style="height: 50px;"/>
                </div>
                <div>
                    <strong>Description du vehicule</strong><br><br>
                    <?php echo $vehicule['description'] ?>
                </div></div>
            <div class="col-md-6">
                <strong>Localisation du vehicule (immatriculation n°<?php echo $vehicule['immatriculation'] ?>) :</strong>
                <br>
                <br>
                <div id="mapPresentation" ></div>
                <br>        

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <strong> Liste des entretiens effectués sur ce vehicule :</strong>
                <form action="" method="get">
                    <select  name="entretien">
                        <?php
                        foreach ($entretiens as $entretien) {
                            echo "<option value=" . $entretien['id'] . ">" . $entretien['titre'] . " </option>";
                        }
                        ?>
                    </select>
                    <input type = "submit">
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>



<script>
    function initMap() {
        var uluru = {lat:<?php echo $vehicule['latitude'] ?>, lng:<?php echo $vehicule['longitude'] ?>};
        var map = new google.maps.Map(document.getElementById('mapPresentation'), {
            zoom: 11,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: <?php echo '"Immatriculation: ' . ($vehicule['immatriculation']) . '"' ?>,
            animation: google.maps.Animation.DROP
        });
    }


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkDuReT22_vSFQy-i28U2prlxs63TBuBU&callback=initMap">
</script>
