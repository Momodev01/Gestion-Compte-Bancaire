<div class="container w-100">
    <div class="container col-12 border shadow d-flex align-items-center justify-content-around p-3 rounded">
        <div class="col-md-3 d-flex align-items-center">
            <label for="inputCity" class="form-label  mx-2">Tel</label>
            <input type="text" class="form-control" id="inputTel">
        </div>
        <div class="col-md-3 d-flex align-items-center">
            <label for="inputCity" class="form-label  mx-2">Email</label>
            <input type="text" class="form-control" id="inputMail">
        </div>
        <div class="col-md-4 d-flex d-flex align-items-center">
            <label for="inputProfil" class="form-label  mx-2">Profil</label>
            <select id="inputProfil" class="form-select">
                <option value="all">Tout</option>
                <option value="Compte Courant">RG</option>
                <option value="Compte Épargne">CC</option>
                <option value="Compte Épargne">Client</option>
            </select>
        </div>
    </div>
    <div class="container mt-4 col-12 ">
        <table class="table table-striped table-hover table-bordered vw-50">
            <thead class="table-primary">
                <tr>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Prenom</th>
                    <th class="text-center">Téléphone</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Profil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $datum): ?>
                    <tr>
                        <td class="text-center"> <?= $datum->nom ?> </td>
                        <td class="text-center"> <?= $datum->prenom ?> </td>
                        <td class="text-center"> <?= $datum->telephone ?> </td>
                        <td class="text-center"> <?= $datum->email ?> </td>
                        <td class="text-center"> <?= $datum->libp ?> </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

    <!-- Java Script -->
<script src="<?=WEBROOT?>/js/users.js"></script>