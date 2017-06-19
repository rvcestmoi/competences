<?php ?>

<div class="container">
    <div class='row'>
        <div class="container">
            <main>
                <div id="map"></div>

            </main>
        </div>
    </div>
</div>


<script>
    function initMap() {
        var uluru = {lat: 46.181905, lng: -0.246184};
        var uluru2 = {lat: 46.781905, lng: -0.346184};
        
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title :'Sabenis',
            animation: google.maps.Animation.DROP
        });
        
         var marker2 = new google.maps.Marker({
            position: uluru2,
            map: map,            
            animation: google.maps.Animation.DROP
        });
    }
    
    
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkDuReT22_vSFQy-i28U2prlxs63TBuBU&callback=initMap">
</script>
