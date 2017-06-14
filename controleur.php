<?php
if(isset($_GET['p']) && $_GET['p']=="Accueil"){include '/vues/Accueil.php';}
if(isset($_GET['p']) && $_GET['p']=="PHP"){include '/vues/PHP.php';}
if(isset($_GET['p']) && $_GET['p']=="Javascript"){include '/vues/Javascript.php';}
if (isset($_GET['php'])) {require  "/vues/PHP/".$_GET['php'];}
if (isset($_GET['javascript'])) {require  "/vues/Javascript/".$_GET['javascript'];}
?>
