<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"></div>
    <h1>CADASTRAR</h1>
    <form action="cadastrar.php" method="post">
        <Label>NOME</Label>
        <input type="text" name="nome">
        <label>Email</label>
        <input type="email" name="email">
        <label>Senha</label>
        <input type="password" name="senha"> 
        <label>Telefone</label>
        <input type="text" name="telefone">
        <label>CPF</label>
        <input type="text" name="cpf">
        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>