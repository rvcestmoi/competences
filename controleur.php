<?php
if(isset($_GET['p']) && $_GET['p']=="Accueil"){include '/vues/Accueil.php';}
if(isset($_GET['p']) && $_GET['p']=="PHP"){include '/vues/PHP.php';}
if(isset($_GET['p']) && $_GET['p']=="Javascript"){include '/vues/Javascript.php';}
if(isset($_GET['p']) && $_GET['p']=="analyse"){include '/vues/AnalyseConception.php';}
if(isset($_GET['p']) && $_GET['p']=="Liens"){include '/vues/Liens.php';}

if (isset($_GET['php'])) {require  "/vues/PHP/".$_GET['php'];}
if (isset($_GET['javascript'])) {require  "/vues/Javascript/".$_GET['javascript'];}
if (isset($_GET['analyse'])) {require  "/vues/AnalyseConception/".$_GET['analyse'];}
?>
