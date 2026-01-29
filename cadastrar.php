<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

$sql = "INSERT into cadastro(nome, email, senha, telefone, cpf)
values ('$nome', '$email', '$senha','$telefone', '$cpf')";

if (mysqli_query($conexao, $sql)){
    header("Location: login.html");
    exit ;
echo "<br><a href=\"cadastro.php\">Voltar</a>";
} else {
    echo "Erro:" . mysqli_error($conexao);
}
?>