<?php
require __DIR__ . '/../src/Models/Bootstrap.php';
$cars = new Cars();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <title>Carros</title>
</head>

<body>

    <?php include "appends/menu.php"; ?>
    <div class="row justify-content-center">
        <a href="cadastro.php" class="btn btn-primary btn-person mt-4 mb-4">Cadastrar novo carro</a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $cars = $cars->get();
            if (!empty($cars)) :
                foreach ($cars as $row) :
            ?>

                    <div class="card col-md-3 card-person">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo  '<b>' . $row['model'] . '</b>' .  ' - ' . $row['brand']; ?></h5>
                            <p class="card-text"><?php echo $row['observation'] ?></p>
                            <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar</a>
                            <button onclick="deleteCar('<?php echo $row['id'] ?>', '<?php echo $row['model'] . ' - ' . $row['brand'] ?>');" class="btn btn-danger">Deletar</button>
                        </div>
                    </div>
            <?php
                endforeach;
            else :
                echo '<p>Não foi encontrado nenhum carro cadastrado, por favor <a href="cadastro.php">clique aqui</a> para cadastrar </p>';
            endif;
            ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <script>
            function deleteCar(id, nameCar) {
                $.confirm({
                    title: 'Você tem certeza que deseja deletar?',
                    content: 'Você tem certeza que deseja deletar o carro: ' + nameCar + ' ? ',
                    buttons: {
                        cancelar: function() {},
                        confirmar: {
                            text: 'Confirmar',
                            btnClass: 'btn-danger',
                            keys: ['enter', 'shift'],
                           
                        }
                    }
                });
            }
        </script>
</body>

</html>