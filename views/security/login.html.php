<?php
if (!isset($errors)) {
  $errors = [];
}
?>
<section class="vh-100 bg-primary">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <form class="p-5 text-center rounded rounded-5 bg-light-subtle" id="formConnexion" action="<?=WEBROOT?>" method="post">
          
            <h3 class="mb-5">Log in</h3>

            <div class="form-floating mb-3">
              <input type="text" class="form-control <?= isset($errors['email'])?'is-invalid':'' ?>" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email address</label>
              <div class="email-error" class="invalid-feedback text-danger"> <?= $errors['email']??"" ?> </div>
            </div>

            <div class="form-floating">
              <input type="password" class="form-control mt-5 <?= isset($errors['pwd'])?'is-invalid':'' ?>" id="password" name="pwd" placeholder="Password">
              <label for="password">Password</label>
              <div class="password-error" class="invalid-feedback"> <?= $errors['pwd']??"" ?> </div>
            </div>
            <input type="hidden" name="ressource" value="html">
            <input type="hidden" name="controller" value="Security">
            <button type="submit" name="action" value="login" class="btn btn-primary mt-5 px-4 py-2" id="loginBtn">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="<?=WEBROOT?>/js/connexion.js"></script>
