<?php $this->title = 'Mon profil'; ?>
<div class="alert-primary" role="alert">
<?= $this->session->show('update_password'); ?>
</div>

<div class="card card-signin p-5 mt-5">

    <h2><p>Nom d'utilisateur : <?= $this->session->get('pseudo'); ?></h2>
    <h3><p>Niveau de droit sur le blog : <?= $this->session->get('role'); ?></h3>
    <div class="row">
        <div class="col-md-6">
        <input type="button" class="btn btn-primary" value="Modifier mon mot de passe" onclick='window.location.assign("../public/index.php?route=updatePassword")'/>
        </div>
        <div class="col-md-6">
        <input type="button" class="btn btn-danger" value="Supprimer mon compte" onclick='window.location.assign("../public/index.php?route=deleteAccount")'/>
        </div>
    </div>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>