<?php
//$id= $_GET['id'];
$user = $connect->query("SELECT * FROM utilisateur WHERE utilisateur.id=45")->fetch();
?>

<div class="container">
    <h2>Ajout d'un entretien</h2>

    <div class="presentation jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col">
                <form action="" method="post" name='ajoutEntretien' >
                    <div class='form form-group'>
                        <p> nom :
                            <input  type ='text' name="nomForm" placeholder= <?php echo $user['nom'] ?> class="form-control"></p>
                        <p> Prénom :<input name="prenomForm" type ='text' placeholder=<?php echo $user['prenom'] ?> class="form-control"class="form-control"></p>
                        <p> Adresse: <input name="adresseForm" type ='text' placeholder=<?php echo $user['adresse'] ?> class="form-control"></p>
                        <p> Mail: <input name="telForm" type ='text' placeholder=<?php echo $user['telephone'] ?> class="form-control"></p>

                        <input name="submitUtilisateur" value="OK" type ='submit'>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>




<?php


if (isset($_POST["submitUtilisateur"]) && $_POST["submitUtilisateur"] == "OK") {

    if (!empty($_POST["nomForm"]) && !empty($_POST["prenomForm"]) && !empty($_POST["telForm"]) && !empty($_POST["adresseForm"])) {
        //Tout est valide (les champs sont remplis et le kilometrage est numerique)
        $nom = $_POST['nomForm'];
      
        $connect->beginTransaction();
        try {
        $req = $connect->prepare("UPDATE utilisateur SET nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:tel WHERE utilisateur.id=45");
        $req->execute(array('nom'=>$_POST['nomForm'],'prenom'=>$_POST['prenomForm'],'adresse'=>$_POST['adresseForm'],'tel'=>$_POST['telForm']));
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
