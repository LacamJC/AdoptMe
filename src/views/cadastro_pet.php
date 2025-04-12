<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/assets/scss/main.css">
</head>
<?php
require_once '../classes/Layout.php';
?>

<body>
    <?php Layout::Header();
    ?>


    <div class="container">
        <form class="w-75 mx-auto" method="POST" action="../services/processar_cadastro_pet.php">
            <div class="row mb-3">
                <div class="col col-md-6 col-12">
                    <label for="nome_pet" class="form-label">Nome do Pet</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nome_pet"
                        name="nome_pet"
                        required>
                </div>
                <div class="col col-md-6 col-12">
                    <label
                        for="idade_pet"
                        class="form-label">Idade</label>
                    <input
                        type="number"
                        name="idade_pet"
                        id="idade_pet"
                        class="form-control"
                        required>

                </div>
            </div>
            <div class="mb-3">
                <select class="form-select" name="especie_pet">
                    <option value="1" selected>Cachorro</option>
                    <option value="2">Gato</option>
                    <option value="3">Papagaio</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>






    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>