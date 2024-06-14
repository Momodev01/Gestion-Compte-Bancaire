<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion GB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

</head>
<body>

<section class="vh-100 bg-primary">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <form class="p-5 text-center rounded rounded-5 bg-light-subtle" id="formConnexion" action="<?=WEBROOT?>" method="post">
          
            <h3 class="mb-5">Log in</h3>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control mt-5" id="password" name="pwd" placeholder="Password">
              <label for="password">Password</label>
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
</body>
</html>