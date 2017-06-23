<?php
$vehicules = $connect->query("SELECT * FROM vehicule")->fetchAll();
$user = $connect->query("SELECT id FROM utilisateur WHERE utilisateur.id=45")->fetch();
$utilisateur = $user[0];
?>

<div class="container">
    <h2>Ajout d'un entretien</h2>

    <div class="presentation jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col">
                <form action="" method="post" name='ajoutEntretien' >
                    <div class='form form-group'>
                        <p> Titre de l'entretien :
                            <input  type ='text' name="titreForm" placeholder="Titre de l'entretien" class="form-control"></p>
                        <p> Remarques :<input name="remarquesForm" type ='text' placeholder="Remarques" class="form-control"class="form-control"></p>
                        <p> Kilométrage: <input name="kiloForm" type ='text' placeholder="kilométrage du véhicule" class="form-control"></p>
                        <p> Vehicule: <select name='enretienVehicule' class="form-control">
                                <?php
                                foreach ($vehicules as $vehicule) {
                                    echo "<option value=" . $vehicule['id'] . ">" . $vehicule['immatriculation'] . "</option>";
                                }
                                ?>
                            </select></p>
                        <input name="submitEntretien" value="submited" type ='submit'>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?php
if (isset($_POST["submitEntretien"]) && $_POST["submitEntretien"] == "submited") {

    if (!empty($_POST["titreForm"]) && !empty($_POST["remarquesForm"]) && is_numeric($_POST["kiloForm"]) && !empty($_POST["enretienVehicule"])) {
        //Tout est valide (les champs sont remplis et le kilometrage est numerique)
        $connect->beginTransaction();
        try {
        $req = $connect->prepare("INSERT INTO entretien (remarques,titre,killometrage,vehicule,utilisateur) VALUES (?,?,?,?,?) ");
        $req->execute(array($_POST["remarquesForm"], $_POST["titreForm"], $_POST["kiloForm"], $_POST["enretienVehicule"],$utilisateur));
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
    } else
        echo 'au moins un champ est incorrect';
}
?>
