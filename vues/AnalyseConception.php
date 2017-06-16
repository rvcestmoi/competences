<?php ?>
<div class="container">
    <div class='row'>
        <div class='col-xs-6 col-xs-offset-3'>
            <div class="container">
                <main>
                    Voici la liste des exemples PHP disponibles :
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
</div>
    
        
        <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

