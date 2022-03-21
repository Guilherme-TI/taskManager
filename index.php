<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="shortcut icon" href="img/xicara-de-cafe.png" type="image/x-icon">
    <title>Task Manager - Login</title>
</head>
<body>
    <h1>Task Manager</h1>
    <script src="script/textEffect.js"></script>

    <form action="loginUsuario.php" method="post">
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <input type="password" name="senha" id="senha" placeholder="Senha" required>
        <img class="img-login" src="img/visualizar.png" onclick="clicou()" id="click" width="30"><br>
        <script src="script/viewSenha.js"></script>
        <button name="acessar">Acessar</button>
        <p>Não possui uma conta? <a href="view_cadastro.php">Registre-se</a></p>
    </form>
</body>
</html>