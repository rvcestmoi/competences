<?php ?>

<div class="container">
    <div class=" php row">
        <div class="col-md-6"> 
            <img class="img-responsive" src="img/php/exempleCode.png">
        </div>
        <div class="col-md-6">
            <ul>
                <li>Manipulation d'un système de fichiers (création, édition, suppression, droits d'accès...)</li>
                <li>Accès aux bases de données avec la librairie PDO (Doctrine)</li>
                <li>Gestion des e-mails en POP et IMAP</li>
                <li>Cryptage (MD5 et SHA1)</li>                    
                <li>Manipulation des dates</li>                    
                <li>Manipulation des URL</li>                    
                <li>Envoi et lecture de cookies</li>                    
                <li>Utilisation de flux JSON</li>
            </ul>
        </div>

    </div>
</div>
<!--
<div class="container">
    <div class='row'>
        <div class='col-xs-6 col-xs-offset-3'>
            <div class="container">
                <main>
                    Voici la liste des exemples PHP disponibles :
                    <br>

<?php
//Récupération des fichiers
$dir = './vues/PHP';
$file = scandir($dir);
$max = count($file);
echo'<ul';
//affichage et redirection des fichiers
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
-->