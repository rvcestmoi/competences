<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="container" >
    <div class='row'>

        <main class="main" >
            <h3>
                Bienvenue sur cette application regroupants quelques compétences
            </h3>
            <canvas id="canvas" width="1200" height="350"></canvas>
        </main>

    </div>
</div>

<script>
/*

    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var camion = new Image();
    var carte = new Image();
    var position = 0;
    var j = 1;
    vark = 1;
    camion.src = 'img/Accueil/camion.png';
    carte.src = 'img/Accueil/carte2.png';

    window.requestAnimFrame = (function () {
        return  window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 10);
                };
    })();

// usage:
// instead of setInterval(render, 16) ....

    function animer(i) {
        sleep();
        requestAnimFrame(animer);
        effacer();
        ctx.save();
        ctx.drawImage(carte, 0, 0, 900, 262);
        ctx.rotate(10);
        ctx.drawImage(camion, i, 55, 21, 50);
        //ctx.restore();       
        
        return
    }

    
    ;
    function afficher(ctx, carte, camion, positionX) {

        //ctx.drawImage(carte, 0, 0, 900, 262);
        
        ctx.drawImage(camion, positionX, 55, 21, 50);
        //sleep();
        return
    }

    function effacer() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    function sleep() {
        setTimeout(wait, 500);
    }
    function wait() {
        console.log(1);
    }
    
    for (i=0; i<200;i++) {
    animer(i);
    console.log(i)
    }
    */
</script>