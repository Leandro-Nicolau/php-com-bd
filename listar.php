<?php
include "conexao.php";
$sql = "SELECT * FROM  clientes ORDER BY nome";
$resultado = mysqli_query($conexao, $sql);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Clientes</title>
</head>
<body>
    <h2>Clientes Cadastrados</h2>
    <table border="1" cellpadding="5">
        
        <?php while ($cliente = mysqli_fetch_assoc($resultado)):  ?>   
        <tr>   
            <td><?= $cliente["codigo"] ?></td>
            <td><?= $cliente["nome"] ?></td>
            <td><?= $cliente["endereco"] ?></td>
            <td><?= $cliente["telefone"] ?></td>
            <td>
                <a href="alterar.php?codigo=<?= $cliente["codigo"] ?>">Alterar</a>
                <a href="excluir.php?codigo=<?= $cliente["codigo"] ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?');">Excluir</a>
            </td>
        </tr>  
        <?php endwhile; ?>
    </table>
    <p><a href="index.php">Voltar ao menu</a></p>
</body>