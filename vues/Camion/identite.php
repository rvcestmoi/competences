<?php

$vehicule = $connect->query("SELECT * FROM vehicule where vehicule.id=".$_GET['vehicules'])->fetch();
//var_dump($vehicule);
?>

<div class="container">
    <div class="row">
        <div class="presentation jumbotron">
            <div class="col-md-6">
                <?php echo $vehicule['description'] ?>
            </div>
            <div class="col-md-6">
                <div id="mapPresentation" ></div>
                <br>        

            </div>
            
        </div>
    </div>
    <div class=" lienCv row">
        <a href="#"><div>
                <img src="img/Presentation/fleche.png" alt="flechecv" style="height: 15px;"/><span> Par ici pour suivre mon cv</span>
            </div>
        </a>
    </div>
</div>



<script>
    function initMap() {
        var uluru = {lat:<?php echo $vehicule['latitude']?>, lng:<?php echo $vehicule['longitude']?>};
        var map = new google.maps.Map(document.getElementById('mapPresentation'), {
            zoom: 11,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: <?php echo '"Immatriculation: '.($vehicule['immatriculation']).'"' ?>,
            animation: google.maps.Animation.DROP
        });
    }


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkDuReT22_vSFQy-i28U2prlxs63TBuBU&callback=initMap">
</script>
