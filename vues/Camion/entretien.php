<?php
$entretien = $connect->query("SELECT * FROM entretien where entretien.id=" . $_GET['entretien'])->fetch();
$user = $connect->query("SELECT * FROM utilisateur where utilisateur.id=".$entretien['utilisateur'])->fetch();
//var_dump($user);
$datetime = explode(' ', $entretien['dateEntretien']);
$date_en = $datetime[0];
$time = $datetime[1];
$date_fr = explode('-', $date_en);
$date = $date_fr[2] . '/' . $date_fr [ 1] . '/' . $date_fr[0];
?>

<div class="container">
    <h2><?php echo $entretien['titre'] ?></h2>

    <div class="presentation jumbotron">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <strong>Description de l'entretien</strong><br><br>
                    <?php echo $entretien['remarques'] ?>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div>
                <strong>Kilomètre :</strong><br><br>
                <?php echo $entretien['killometrage'] . " km" ?>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div>
            <strong>Entretien effectué le </strong>
            <?php echo $date_fr[2] . "/" . $date_fr[1] . "/" . $date_fr [ 0] . " à " . $datetime [ 1]. " par <strong> ".$user['prenom']." ".$user['nom']."</strong>"; ?>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>



