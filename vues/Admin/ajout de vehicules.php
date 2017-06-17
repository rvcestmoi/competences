<?php
require '/fonctions/admin/liste.php';
require '/fonctions/fonctions.php';
?>
<div class="container">
    <div class='row'>

        <main class="main">
            Le code a ajouté automatiquement 20 vehicules avec lattitude, longitude en random et description et immatriculation choisis sur une liste.
        </main>

    </div>
</div>

<?php
for ($i = 0; $i < 20; $i++) {
    $description = $listeDescription[rand(0, count($listeDescription) - 1)];
    $immatriculation = $listeImmatriculation[rand(0, count($listeImmatriculation) - 1)];
    $latitude = random_float(45.984497, 46.534108);
    $longitude = random_float(-1.030135, 0.198473);
    var_dump($longitude);
    $connect->beginTransaction();
    try {
        $req = $connect->prepare("INSERT INTO vehicule (description,immatriculation,latitude,longitude) VALUES (?,?,?,?) ");
        $req->execute(array($description, $immatriculation, $latitude, $longitude));
        $connect->commit();
        echo 'Tout s’est bien passé.';
    } catch (Exception $e) { //en cas d’erreur
        //on annule la transation
        $connect->rollback();
        //on affiche un message d’erreur ainsi que les erreurs
        echo 'Tout ne s’est pas bien passé, voir les erreurs ci-dessous <br/>';
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        //on arrête l’exécution s’il y a du code après
        exit();
    }
}
?><?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

