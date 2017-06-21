/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var camion = new Image();
    var carte = new Image();
    camion.src = 'img/Accueil/camion.png';
    carte.src = 'img/Accueil/carte2.png';
    carte.onload = function () {
        afficher();
        //ctx.drawImage(carte, 0, 0, 900, 262);
        //ctx.drawImage(camion, 55, 5, 21, 50);        
    }


    function afficher() {
        var i = 2;
        while (i < 500) {
            sleep();
            //effacer();
            //ctx.move()
            ctx.drawImage(carte, 0, 0, 900, 262);
            ctx.drawImage(camion, i, 55, 21, 50);
            i++;
        }
    }
    function effacer() {
       // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    function sleep() {
        setTimeout(wait, 500);
    }
    function wait() {
        console.log(1);
    }
}
jQuery(document).ready(function ($) {

    $('#myCarousel').carousel({
        interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });
});


ajaxGet("http://localhost/Competences/data/films.json", function (reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    var films = JSON.parse(reponse);
    // Affiche le titre de chaque film
    films.forEach(function (film) {
        console.log(film.titre);
    })

});
