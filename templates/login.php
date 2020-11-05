<?php $this->title = "Connexion"; ?>



<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
            <form method="post" action="../public/index.php?route=login"  >
            <div class="form-label-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" class="form-control" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
            </div>

              <div class="form-label-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="form-control" name="password" >
                <br>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Connexion" id="submit" name="submit">Se connecter</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
