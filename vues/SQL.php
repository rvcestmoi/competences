<?php?>

<?php ?>


<div class="container">
    <div class="row">
        <div class="html jumbotron">
            <div class="col-md-6"> 
                <ul>
                    <li>
                        <h3>Création de bases de données</h3></li>
                    <li>
                        <h3>Entretien des bases</h3></li>
                    <li>
                        <h3>Requètes</h3></li>
                </ul>
            </div>       

        </div>
    </div>

</div>
<div class="container">
    <div class='row'>
        <div class='col-xs-6 col-xs-offset-3'>
            <div class="container">
                <main>
                    Voici la liste des exemples PHP disponibles :
                    <br>

                    <?php
                    //Récupération des fichiers
                    $dir = './vues/SQL';
                    $file = scandir($dir);
                    $max = count($file);
                    echo'<ul';
                    //affichage et redirection des fichiers
                    for ($i = 2; $i < $max; $i++) {
                        echo '<li>';
                        echo '<a href = "?sql=' . $file[$i] . '"' . '>' . '<div class="liste">' . $file[$i] . '</div>' . '</a>';
                        echo'</li';
                    }
                    echo'</ul>';
                    ?>

                </main>
            </div>
        </div>
    </div>