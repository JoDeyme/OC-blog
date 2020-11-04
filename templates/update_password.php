 <?php $this->title = 'Modifier mot de passe'; ?>


<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Modifier le mot de passe</h5>
            <form method="post" action="../public/index.php?route=updatePassword"  >
            <div class="form-label-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" value="Mettre à jour"><br>
            </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Connexion" id="submit" name="submit">Valider</button>
            </form>
          </div>
        </div>
    </div>
</div>

        <br>
<a href="../public/index.php">Retour à l'accueil</a>