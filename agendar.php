<?php
include ("conexao.php");

$nome = $_POST['nome'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$hora = $_POST['hora'];

$sql = "INSERT into agendamento(nome,servico,data,hora)
values('$nome','$servico','$data','$hora')";

if(mysqli_query($conexao,$sql)){
    header("Location: menu.html");
    exit;
} else {
    echo "Error ao agendar";

}
?>

