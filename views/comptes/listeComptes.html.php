<div class="container w-100">
    <div class="container col-12 mt-2 border shadow d-flex align-items-center justify-content-around p-3 rounded">
        <div class="col-md-4 d-flex align-items-center ">
            <label for="numCB" class="form-label col-md-3 ">Numéro CB</label>
            <input type="text" class="form-control" id="numCB">
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <label for="inputTel" class="form-label mx-2">Tel</label>
            <input type="text" class="form-control" id="inputTel">
        </div>
        <div class="col-md-3 d-flex d-flex align-items-center">
            <label for="selectType" class="form-label  mx-2">Type</label>
            <select id="selectType" class="form-select">
                <option value="all">Tout</option>
                <option value="Compte Courant">Compte Courant</option>
                <option value="Compte Épargne">Compte Épargne	</option>
                <option value="Compte Entreprise">Compte Entreprise</option>
            </select>
        </div>
    </div>
    <div class="container mt-4 col-12">
        <table class="table mt-5 table-striped table-hover table-bordered vw-50">
            <thead class="table-primary">
                <tr>
                    <th class=" text-center">Numéro CB</th>
                    <th class=" text-center">Solde</th>
                    <th class=" text-center">Type</th>
                    <th class=" text-center">Téléphone</th>
                    <th class=" text-center">Email</th>
                    <th class=" text-center">Propriétaire</th>
                </tr>
            </thead>
            <tbody id="tBody">
            <?php foreach ($data as $datum): ?>
                <tr>
                    <td class="text-center"> <?= $datum->numero ?>  </td>
                    <td class="text-center"> <?= $datum->solde ?>  </td>
                    <td class="text-center"> <?= $datum->libtc ?>  </td>
                    <td class="text-center"> <?= $datum->telephone ?>  </td>
                    <td class="text-center"> <?= $datum->email ?>  </td>
                    <td class="text-center">
                        <img src="<?=WEBROOT?>/assets/images/img1.jpg" alt="img" style="width:35px; height:35px;"  class="rounded-circle hover"/>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <div class="container col-12 d-flex justify-content-center align-items-center mt-5">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

    <!-- Java Script -->
<script src="<?=WEBROOT?>/js/comptes.js"></script>
