<?php ?>
<div class="container">
    <div class='row'>
        <div class="col-md-6"> 
            <ul>
                <li>
                    <h3>Analyse des exigences</h3></li>
                <li>
                    <h3>Analyse des besoins du client</h3></li>
                <li>
                    <h3>Conception </h3></li>
            </ul>
        </div>
        <div class="col-md-6"> 
            <ul>
                <li>
                    <h3>Comprehension des exigences</h3></li>
                <li>
                    <h3>Comprehension des besoins du client</h3></li>
                <li>
                    <h3>Entretien du site</h3></li>
            </ul>
        </div>
        <br>
        <br>

    </div>
    <div class='row'>
        <div class="col-md-6 col-md-offset-3"> 
        <main>
            Voici la liste des exemples d'analyse et coception disponibles :
            <br>

            <?php
            //Récupération des fichiers
            $dir = './vues/AnalyseConception';
            $file = scandir($dir);
            $max = count($file);
            echo'<ul';
            //affichage et redirection des fichiers
            for ($i = 2; $i < $max; $i++) {
                echo '<li>';
                echo '<a href = "?analyse=' . $file[$i] . '"' . '>' . '<div class="liste">' . $file[$i] . '</div>' . '</a>';
                echo'</li';
            }
            echo'</ul>';
            ?>

        </main>
    </div>
</div>
</div>



        <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

