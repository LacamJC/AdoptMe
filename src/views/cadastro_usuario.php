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
        <form class="w-75 mx-auto" method="POST" action="../services/processar_cadastro_usuario.php">

            <div class="mb-3">
                <label for="nome_usuario" class="form-label">Nome de usuario</label>
                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="row">
                <div class="col col-md-6 col-12">
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                </div>
                <div class="col col-12 col-md-6">
                    <div class="mb-3">
                        <label for="confirma_senha" class="form-label">confirma_senha</label>
                        <input type="password" class="form-control" id="confirma_senha" name="confirma_senha">
                    </div>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="mostrar_senha">
                <label class="form-check-label" for="mostrar_senha">Mostrar senha</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script>
        const checkbox = document.getElementById('mostrar_senha');
        const senhaInput = document.getElementById('senha');
        const confirmaInput = document.getElementById('confirma_senha');

        checkbox.addEventListener("click", () => {
            if (checkbox.checked) {
                senhaInput.type = "text";
                confirmaInput.type = "text";
            } else {
                senhaInput.type = "password";
                confirmaInput.type = "password";
            }
            console.log(checkbox); // Para depuração, mostrar o elemento correto
        });
    </script>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>