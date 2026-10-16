<?php
$servidor = "localhost";
$usuario = "root";
$senha = "Claretiano";
$banco = "Empresa";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>