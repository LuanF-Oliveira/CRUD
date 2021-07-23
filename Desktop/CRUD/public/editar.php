<?php
require __DIR__ . '/../src/Models/Bootstrap.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <title>Carros</title>
</head>

<body>
    <?php
    include "appends/menu.php";
    ?>
    <div class="container" align="center">
        <h2>Editar Carro</h2>
        <form class="col-4" method="post">
            <input type="hidden" name="id" />
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="brand" id="marca" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="model" id="modelo" required>
            </div>
            <div class="mb-3">
                <label for="versao" class="form-label">Versão</label>
                <input type="text" class="form-control" name="version" id="versao" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea type="text" class="form-control" name="observation" id="observacao" required></textarea>
            </div>
            <button type="submit" class="btn col-5 btn-primary">Editar</button>
        </form>
    </div>
</body>

</html>