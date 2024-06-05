
<div class="container col-2 shadow">
    <h1 class="fw-light fs-6 mt-3 mb-3 text-center">MENU</h1>
    <ul class="list-group">
        <li class="list-group-item ">
            <a href="<?=WEBROOT?>?ressource=html&controller=compte" class="list-group-item list-group-item-action <?= $_GET["controller"] == "compte" ? "active" : "" ?> d-flex align-item-center">
            <span class="material-symbols-outlined px-2"> account_balance_wallet </span>
                Comptes
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=demande" class="list-group-item list-group-item-action <?= $_GET["controller"] == "demande" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> checkbook </span>
                Demandes
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=agence" class="list-group-item list-group-item-action <?= $_GET["controller"] == "agence" ? "active" : "" ?> d-flex align-item-center ">
            <span class="material-symbols-outlined px-2"> storefront </span>
                Agences
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=users" class="list-group-item list-group-item-action <?= $_GET["controller"] == "users" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> group </span>
                Users
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=client" class="list-group-item list-group-item-action <?= $_GET["controller"] == "client" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> person </span>
                Clients
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=typecpt" class="list-group-item list-group-item-action <?= $_GET["controller"] == "typecpt" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> account_tree </span>
                Types Compte
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=profil" class="list-group-item list-group-item-action <?= $_GET["controller"] == "profil" ? "active" : "" ?> d-flex align-item-center ">
            <span class="material-symbols-outlined px-2"> supervised_user_circle </span>
                Profils
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=transaction" class="list-group-item list-group-item-action <?= $_GET["controller"] == "transaction" ? "active" : "" ?> d-flex align-item-center ">
                <span class="material-symbols-outlined px-2"> currency_exchange </span>
                Transactions
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?=WEBROOT?>?ressource=html&controller=recu" class="list-group-item list-group-item-action <?= $_GET["controller"] == "recu" ? "actjustify-ive" : "" ?> d-flex align-item-center ">
            <span class="material-symbols-outlined px-2"> contract </span>
                Reçues
            </a>
        </li>
    </ul>
</div>

