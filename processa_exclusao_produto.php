<?php
require 'config.php';

$conexao = mysqli_connect($servidor, $udb, $senha, $bdados);
$sql = "DELETE FROM produtos WHERE id_produto = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "d", $_GET['id']);

if (mysqli_stmt_execute($stmt)) {
    $mensagem = '<span style="color:green;">Produto removido com sucesso!</span>';
} else {
    $mensagem = '<span style="color:red;">Erro ao remover o produto: ' . mysqli_error($conexao) . '</span>';
}

// Fechando a conexão
mysqli_stmt_close($stmt);
mysqli_close($conexao);

echo $mensagem;
echo '<meta http-equiv="refresh" content="2;url=tabela.php" />';
