<?php

if (isset($_GET['p']) && $_GET['p'] == "Accueil") {
    include '/vues/Accueil.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "html") {
    include '/vues/html.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "Présentation") {
    include '/vues/presentation.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "SQL") {
    include '/vues/SQL.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "PHP") {
    include '/vues/PHP.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "Javascript") {
    include '/vues/Javascript.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "analyse") {
    include '/vues/AnalyseConception.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "Liens") {
    include '/vues/Liens.php';
//Controleur spécifiques    
} elseif (isset($_GET['vehicules'])) {
    require "/vues/Camion/identite.php";
    
} elseif (isset($_GET['php'])) {
    require "/vues/PHP/" . $_GET['php'];
} elseif (isset($_GET['sql'])) {
    require "/vues/SQL/" . $_GET['sql'];
} elseif (isset($_GET['javascript'])) {
    require "/vues/Javascript/" . $_GET['javascript'];
} elseif (isset($_GET['analyse'])) {
    require "/vues/AnalyseConception/" . $_GET['analyse'];
} elseif (isset($_GET['p']) && $_GET['p'] == "admin") {
    require "/vues/Admin.php";
} elseif (isset($_GET['admin'])) {
    require "/vues/Admin/" . $_GET['admin'];
} else
    include '/vues/Accueil.php';
?>
