<?php
require __DIR__ . '/../src/Models/Bootstrap.php';
$alert = [];
if (!empty($_POST)) {
    $car = new Cars();
    $brand = !empty($_POST['brand']) ? filter_var($_POST['brand'], FILTER_SANITIZE_STRING) : null;
    $model = !empty($_POST['model']) ? filter_var($_POST['model'], FILTER_SANITIZE_STRING) : null;
    $version = !empty($_POST['version']) ? filter_var($_POST['version'], FILTER_SANITIZE_STRING) : null;
    $observation = !empty($_POST['observation']) ? filter_var($_POST['observation'], FILTER_SANITIZE_STRING) : null;
    if (empty($brand) || empty($model) || empty($version) || empty($observation)) {
        $alert['type'] = "danger";
        $alert['msg'] = "Você não preencheu todos os campos";
    } else {
        if ($car->save($brand, $model, $version, $observation)) {
            $alert['type'] = "success";
            $alert['msg'] = "Seu carro foi cadastrado com sucesso <a href='index.php'>Visualizar</a>";
        } else {
            $alert['type'] = "danger";
            $alert['msg'] = "Seu carro não pode ser cadastrado";
        }
    }
}
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
    if (!empty($alert)) {
        echo "
            <div class='d-flex mt-4 justify-content-center'> 
                <div class='alert alert-person alert-{$alert['type']}'>
                    {$alert['msg']}
                </div>
            </div>
        ";
    }
    ?>
    <div class="container" align="center">
        <h2>Cadastrar Carros</h2>
        <form class="col-4" method="post">
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
            <button type="submit" class="btn col-5 btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

</html>