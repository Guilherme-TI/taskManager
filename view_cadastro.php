<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="shortcut icon" href="img/xicara-de-cafe.png" type="image/x-icon">
    <title>Task Manager - Registro</title>
</head>
<body>
<h1>Task Manager</h1>
    <script src="script/textEffect.js"></script>

    <form action="insertUsuario.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
        <img class="img-cadastro" src="img/visualizar.png" onclick="clicou()" id="click" width="30">
        <script src="script/viewSenha.js"></script>
        <button name="registrar">Registrar</button>
        <p>Já possui uma conta? <a href="index.php">Acesse</a></p>
    </form>
</body>
</html>