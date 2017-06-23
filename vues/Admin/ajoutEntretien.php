<?php
require '/fonctions/admin/liste.php';
require '/fonctions/fonctions.php';
$vehicules = $connect->query("SELECT * FROM vehicule")->fetchAll();
$user = $connect->query("SELECT id FROM utilisateur WHERE utilisateur.id=45")->fetch();
$utilisateur = $user[0];
$min = $connect->query("SELECT min(id) FROM vehicule")->fetch();
$max = $connect->query("SELECT max(id) FROM vehicule")->fetch();
//var_dump($min[0]);
//var_dump($max[0]);
//$randVehicule = rand(intval($min[0]), intval($max[0]));


//var_dump($randVehicule);
?>
<div class="container">
    <div class='row'>

        <main class="main">
            Le code a ajouté automatiquement 20 entretiens de vehicule choisis sur une liste.
        </main>

    </div>
</div>

<?php
for ($i = 0; $i < 20; $i++) {
    $remarques = $listeDescription[rand(0, count($listeDescription) - 1)];
    $kilometrage = rand(10000, 250000);
    $titre = "Titre aléatoire n°" . rand(1, 500);
    //$vehicule = $randVehicule;
    //$utilisateur = 40;
    $connect->beginTransaction();
    try {
        $req = $connect->prepare("INSERT INTO entretien (remarques,titre,killometrage,vehicule,utilisateur) VALUES (?,?,?,?,?) ");
        $req->execute(array($remarques, $titre, $kilometrage, rand(intval($min[0]), intval($max[0])), $utilisateur));
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

