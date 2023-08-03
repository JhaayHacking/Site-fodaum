<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h1>Tela de Login</h1>
    <form action="salvar_login.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
