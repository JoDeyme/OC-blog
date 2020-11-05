<?php $this->title = "Inscription"; ?>


<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Inscription</h5>
            <form method="post" action="../public/index.php?route=register" class="form-signin">
              <div class="form-label-group">
                <input type="text" id="pseudo" name="pseudo" class="form-control" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>">
                <label for="pseudo">Pseudo</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password">Mot de passe</label>
                <br>
              </div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Inscription" id="submit" name="submit">S'inscrire</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>