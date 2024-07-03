
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Bancaire</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>

<main class="d-flex ">
    <div class="container col-2 shadow">
        <h1 class="fw-light fs-6 mt-3 mb-3 text-center">MENU</h1>
        <ul class="list-group">
            <li class="list-group-item ">
                <a href="<?=WEBROOT?>?ressource=html&controller=compte" class="list-group-item list-group-item-action d-flex align-item-center <?= isset($_GET["controller"]) && $_GET["controller"] == "compte" ? "active" : "" ?>">
                <span class="material-symbols-outlined px-2"> account_balance_wallet </span>
                    Comptes
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=demande" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"]=="demande"?"active":""?> d-flex align-item-center ">
                    <span class="material-symbols-outlined px-2"> checkbook </span>
                    Demandes
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=agence" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "agence" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> storefront </span>
                    Agences
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=users" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "users" ? "active" : "" ?> d-flex align-item-center ">
                    <span class="material-symbols-outlined px-2"> group </span>
                    Users
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=client" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "client" ? "active" : "" ?> d-flex align-item-center ">
                    <span class="material-symbols-outlined px-2"> person </span>
                    Clients
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=typecpt" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "typecpt" ? "active" : "" ?> d-flex align-item-center ">
                    <span class="material-symbols-outlined px-2"> account_tree </span>
                    Types Compte
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=profil" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "profil" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> supervised_user_circle </span>
                    Profils
                </a>
            </li>

            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=transaction" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "transaction" ? "active" : "" ?> d-flex align-item-center ">
                    <span class="material-symbols-outlined px-2"> currency_exchange </span>
                    Transactions
                </a>
            </li>
            
            <li class="list-group-item">
                <a href="<?=WEBROOT?>?ressource=html&controller=recu" class="list-group-item list-group-item-action <?= isset($_GET["controller"]) && $_GET["controller"] == "recu" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> contract </span>
                    Reçues
                </a>
            </li>
        </ul>
        <div class="container d-flex justify-content-center align-items-end  pt-5">
            <input type="hidden" name="ressource" value="html">
            <input type="hidden" name="controller" value="Security">
            <input type="hidden" name="action" value="logout">
            <button type="button" class="btn btn-danger mt-5 px-4 py-2" id="loginBtn">Deconnexion</button>
        </div>
    </div>
    <div class="container-fluid col-10 d-flex vh-100 ">
        <?= $contentForView ?>
    </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
</body>

