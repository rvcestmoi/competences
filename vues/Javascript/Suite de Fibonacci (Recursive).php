<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class='row'>
        <div class="container">
            <main>
                <h1>Suite de Fibonacci</h1><br>
                <h2>Le dernier membre de la suite est :</h2>
                <strong><div id='suiteFibonacci'></div></strong>
                <br>
                <hr>
                <h2>la suite complète est :</h2>
                <div id='testFibonacci'></div>

            </main>
        </div>
    </div>
</div>


<script>
    initialiser();
    var suiteFibo = "";
    var suiteComplete = "0";
    function initialiser() {
        var iteration = parseInt(prompt("Combien d'itération ?", 5));
        var suite = document.getElementById('suiteFibonacci');
        var test = document.getElementById('testFibonacci');
        for (var i = iteration; i >= 1; i--) {
            suiteFibo = fibo(i);
            suiteComplete = String(suiteFibo) + " " + suiteComplete;
            console.log(i);
        }
        suiteComplete = suiteComplete.replace('undefined', "");
        //console.dir(suiteComplete);
        suite.innerHTML = fibo(iteration);
        test.innerHTML = suiteComplete;


    }
    function fibo(iteration) {
        if (iteration <= 1)
            return 1;
        else
            return fibo(iteration - 1) + fibo(iteration - 2);

    }


</script>
