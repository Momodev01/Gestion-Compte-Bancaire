<div class="container w-100">
    <div class="container col-12 border shadow d-flex align-items-center justify-content-around p-3 rounded">
        <div class="col-md-3 d-flex align-items-center">
            <label for="inputCity" class="form-label  mx-2">Tel</label>
            <input type="text" class="form-control" id="inputTel">
        </div>
        <div class="col-md-4 d-flex d-flex align-items-center">
            <label for="inputTc" class="form-label  mx-2">Type</label>
            <select id="inputTc" class="form-select">
                <option value="all">Tout</option>
                <option value="Compte Courant">Compte Courant</option>
                <option value="Compte Épargne">Compte Épargne	</option>
                <option value="Compte Entreprise">Compte Entreprise</option>
            </select>
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <label for="inputState" class="form-label mx-2">Statut</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
    </div>
    <div class="container mt-4 col-12">
        <table class="table table-striped table-hover table-bordered vw-50">
            <thead class="table-primary">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Libellé</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $datum): ?>
                <tr>
                    <td class="text-center"> <?= $datum->idp ?>  </td>
                    <td class="text-center"> <?= $datum->libp ?>  </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

    <!-- Java Script -->
<script src="<?=WEBROOT?>/js/profils.js"></script>
