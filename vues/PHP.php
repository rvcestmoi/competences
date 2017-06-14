<?php ?>
<div class="container">
    <div class='row'>
        <div class='col-xs-6 col-xs-offset-3'>
        <div class="container">
            <main>
                Voici la liste des exemples PHP disponibles :
                <br>

                <?php
                $dir = './vues/PHP';
                $file = scandir($dir);                
                $max = count($file);                
                echo'<ul';
                for ($i = 2; $i < $max; $i++) {
                    echo '<li>';
                    echo '<a href = "?php=' . $file[$i] . '"' . '>' . '<div class="liste">' . $file[$i] . '</div>' . '</a>';
                    echo'</li';
                }
                echo'</ul>';
                ?>

            </main>
        </div>
    </div>
</div>