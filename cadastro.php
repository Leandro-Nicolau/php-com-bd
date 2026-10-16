<?php
include "conexao.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $codigo = mysqli_real_escape_string($conexao, $_POST["codigo"]);
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["endereco"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["telefone"]);
    $sql = "INSERT INTO clientes (codigo, nome, endereco, telefone) VALUES ('$codigo', '$nome', '$endereco', '$telefone')";
    mysqli_query($conexao, $sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>
        Cadastrar cliente
    </title>
</head>
<body><h1>Novo Cliente</h1>
    <form method="POST">
        <label> Codigo: </label> <input type="number" name="codigo"<br>
        <label> Nome: </label> <input type="text" name="nome"<br>
        <label> Endereço: </label> <input type="text" name="endereco"<br>
        <label> Telefone: </label> <input type="text" name="telefone"<br>
    <button type= "submit">Cadastrar</button>    
    </form>
</body>
</html>