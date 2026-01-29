<?php
include "conexao.php";
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE cpf='$cpf'";
$result = $conexao->query($sql);
if ($result->num_rows == 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        header("Location: menu.html");
        exit;
    } else {
        echo "Senha Incorreta";
    }
} else {
    echo "Usuario não encontrado";
}
