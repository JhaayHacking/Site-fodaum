<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar a autenticação
    if ($username === "admin' OR '1'='1" && $password === "password") {
        echo "Login bem-sucedido como admin!";

        // Salvar o login em um arquivo
        $log = "Usuário: " . $username . " | Hora: " . date('Y-m-d H:i:s') . PHP_EOL;
        file_put_contents("login.txt", $log, FILE_APPEND);
    } else {
        echo "Credenciais inválidas.";
    }
}
?>
