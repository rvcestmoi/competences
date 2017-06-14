<?php
if(isset($_GET['p']) && $_GET['p']=="Accueil"){include '/vues/Accueil.php';}
if(isset($_GET['p']) && $_GET['p']=="PHP"){include '/vues/PHP.php';}
if (isset($_GET['php'])) {require  "/vues/PHP/".$_GET['php'];}
?>
