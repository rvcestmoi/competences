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
    }
    
    
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABfrAePQ0o3u0tR3K1a5Wt6ZVpXik6nV0&callback=initMap">
</script>
