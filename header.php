<?php 
//Initialisation des variables
$active='class="active"';
?>

<header>
    <div class ="container">
        <div class="row">
            <div class="col-xs-12  visible-xs"> <img class="img-responsive" src="img/headerXs.png" alt="header" style="width: 100%"> </div>
            <div class="col-xs-12 visible-sm "> <img class="img-responsive" src="img/headerSm.png" alt="header" style="width: 100%"> </div>
            <div class="col-xs-12 visible-md"><img class="img-responsive" src="img/headerMd.png" alt="header" style="width: 100%"></div>
            <div class="col-xs-12 visible-lg"><img class="img-responsive" src="img/headerLgetMd.png" alt="header" style="width: 100%"> </div>

        </div>
    </div>


<!--            <div> <span class="col-lg-12 visible-lg alert alert-danger">ecran large</span> <span class="col-md-12 visible-md alert alert-warning">ecran medium</span> <span class="col-sm-12 visible-sm alert alert-warning">ecran small</span> <span class="col-xs-12 visible-xs alert alert-success">ecran extra small</span> </div>-->
    <!--    HEADER-->

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 1) echo $active ?>><a href="?p=Accueil">Accueil</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 2) echo $active ?>><a href="?p=2">Présentation</a></li>                   
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 6) echo $active ?>><a href="?p=6">HTML/CSS</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 7) echo $active ?>><a href="?p=7">Javascript/JQuery</a></li>                    
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 8) echo $active ?>><a href="?p=PHP">PHP</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 9) echo $active ?>><a href="?p=9">Analyse/Conception</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 10) echo $active ?>><a href="?p=10">Symfony 2</a></li>

                </ul>
            </div>
        </nav>
    </div>
</header>
