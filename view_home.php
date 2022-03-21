<?php
require_once "class/Conexao.php";
require_once "class/Tarefa.php";
require_once "class/Usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/xicara-de-cafe.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Task Manager - <?= $_SESSION['nome']; ?></title>
</head>

<body>
    <?php require_once "view_nav.php"; ?>

    <h1 class="text mb-4">Olá <?= $_SESSION['nome']; ?>! Gerencie as suas tarefas</h1>
    <script src="script/textEffect.js"></script>

    <div class="container tex text-center mb-3">
        <div class="row align-items-start">
            <div class="col">
                <h2>Adicionar</h2>

                <form action="insertTarefa.php" method="post">
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo" required><br>
                    <input type="date" name="dataBr" id="dataBr"><br>
                    <input type="time" name="horario" id="horario"><br>
                    <textarea name="descricao" id="descricao" cols="54" rows="8" placeholder="Descreva a sua tarefa..."></textarea>
                    <input style="width:0; height:0;" type="number" name="usuario_idusuario" value="<?= $_SESSION['logado']; ?>">
                    <button class="button mb-3" name="adicionar">Adicionar</button>
                </form>
            </div>
            <div class="col">
                <h2 class="text mb-4">Ativas</h2>

                <table class="table table-dark">
                    <thead>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Horario</th>
                        <th>Descrição</th>
                        <th>Exluir</th>
                    </thead>

                    <?php
                    $tarefa = new Tarefa();
                    $t = $tarefa->listTask($_SESSION['logado']);
                    if($t){ ?>

                        <tr>
                            <td><?= $t['titulo']; ?></td>
                            <td><?= $t['dataBr']; ?></td>
                            <td><?= $t['horario']; ?></td>
                            <td><?= $t['descricao']; ?></td>
                            <td><a href="excluirTarefa.php?idtarefa=<?= $t['idtarefa']; ?>">Excluir</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>