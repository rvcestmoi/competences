<?php
require '/fonctions/admin/liste.php';
?>
<div class="container">
    <div class='row'>

        <main class="main">
            Le code a ajouté automatiquement 20 personnes avec nom, prénom, tel, adresse choisis sur une liste.
        </main>

    </div>
</div>

<?php

for ($i=0;$i<20;$i++){
    $nom = $listeNom[rand(0, count($listeNom)-1)];
    $prenom = $listePrenom[rand(0, count($listePrenom)-1)];
    $adresse = $listeAdresse[rand(0, count($listeAdresse)-1)];
    $telephone = $listeTel[rand(0, count($listeTel)-1)];
$connect->beginTransaction();
try {
    $req = $connect->prepare("INSERT INTO utilisateur (nom, prenom, adresse, telephone) VALUES (?,?,?,?) ");
    $req->execute(array($nom, $prenom, $adresse, $telephone));
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
    ?>