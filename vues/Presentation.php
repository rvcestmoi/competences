<div class="container">
    <div class="row">
        <div class="presentation jumbotron">
            <div class="col-md-6">
                <img class="img-responsive photoProfil" src="img/Presentation/photoHerve.jpg">
            </div>
            <div class="col-md-6">
                <div id="mapPresentation" ></div>
                <br>
                <strong>
                    <ul>
                        <li>33 ans</li>
                        <li>Passionné d'informatique</li>
                        <li>Curiosité d'esprit</li>
                        <li>Anglais courant</li>
                    </ul>
                </strong>

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
        var uluru = {lat: 46.179562, lng: -1.108284};
        var map = new google.maps.Map(document.getElementById('mapPresentation'), {
            zoom: 11,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'Mon petit chez moi',
            animation: google.maps.Animation.DROP
        });
    }


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkDuReT22_vSFQy-i28U2prlxs63TBuBU&callback=initMap">
</script>
