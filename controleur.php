<?php

if (isset($_GET['p']) && $_GET['p'] == "Accueil") {
    include '/vues/Accueil.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "PHP") {
    include '/vues/PHP.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "Javascript") {
    include '/vues/Javascript.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "analyse") {
    include '/vues/AnalyseConception.php';
} elseif (isset($_GET['p']) && $_GET['p'] == "Liens") {
    include '/vues/Liens.php';
} elseif (isset($_GET['php'])) {
    require "/vues/PHP/" . $_GET['php'];
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
