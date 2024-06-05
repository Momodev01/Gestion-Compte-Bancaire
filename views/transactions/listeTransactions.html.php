<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
    <div class="container-fluid col-12 d-flex vh-100 ">
        <?php require_once "../views/partials/sidebar.html.php";?>
        <div class="container mt-4 col-10">
            <table class="table mt-5 table table-striped table-hover table-bordered vw-50">
                <thead class="table-primary">
                    <tr>
                        <th scope="col text-align-center">Date</th>
                        <th scope="col text-align-center">Montant</th>
                        <th scope="col text-align-center">Type</th>
                        <th scope="col text-align-center">Client</th>
                        <th scope="col text-align-center">Compte</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $datum): ?>
                    <tr>
                        <td class="px-3"> <?= $datum->datetr ?>  </td>
                        <td class="px-3"> <?= $datum->montant ?>  </td>
                        <td class="px-3"> <?= $datum->type ?>  </td>
                        <td class="px-3"> <?= $datum->prenom.' '.$datum->nom ?>  </td>
                        <td class="px-3"> <?= $datum->numero ?>  </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>