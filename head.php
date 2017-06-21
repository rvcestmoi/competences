<?php session_start();
 require '/fonctions/config.php';
 //Connection à la bdd
 $connect = connectBdd($dbName,$dbUser,$dbPassword);


?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sabenis 26/06/17</title>

        <!-- Bootstrap -->
        <script src="js/jquery.js"></script>        
        <script src="js/bootstrap.js"></script>        
        <script src="js/debounce.js"></script>
        <script src="js/ajax.js" ></script>  
        <script src="js/custom.js" ></script>
        <script src="js/json.js" ></script>
        
        
        
        
        <link href="style/bootstrap.min.css"  rel="stylesheet"> 
        <link href=" style/style.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >


