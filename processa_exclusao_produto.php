<?php

// Inclua o arquivo de configuração
require 'config.php';

// Verifique se o parâmetro id_produto está definido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para selecionar o produto pelo ID
    $sql = "SELECT * FROM produtos WHERE id_produto = '$id'";
    $result = $sistema_vendas->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Verifica se o arquivo existe antes de tentar removê-lo
            $foto_produto = $row["fotos_produto"];
            $caminho_foto = $foto_produto;

            if (file_exists($caminho_foto)) {
                // Remove o arquivo
                if (unlink($caminho_foto)) {
                    usleep(3000000);
                    echo '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:green;">A foto \'' . $foto_produto . '\' foi removida com sucesso.</span></div><br>';
                } else {
                    usleep(3000000);
                    echo '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:red;">Erro ao remover a foto \'' . $foto_produto . '\'.</span></div><br>';
                }
            } else {
                usleep(3000000);
                echo '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:red;">O arquivo \'' . $foto_produto . '\' não existe.</span></div><br>';
            }
        }
    } else {
        usleep(3000000);
        echo '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:red;">Nenhum produto encontrado com o ID fornecido.</span></div>';
    }
} else {
    usleep(3000000);
    echo '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:red;">ID do produto não fornecido na URL.</span></div>';
}


$conexao = mysqli_connect($servidor, $udb, $senha, $bdados);
$sql = "DELETE FROM produtos WHERE id_produto = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "d", $_GET['id']);

if (mysqli_stmt_execute($stmt)) {
    usleep(3000000);
    $mensagem = '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:green;">Produto removido com sucesso!</span></div>';
} else {
    usleep(3000000);
    $mensagem = '<div style="text-align: center; margin-top: 50px; font-size: 2rem; font-weight: bold;"><span style="color:red;">Erro ao remover o produto: ' . mysqli_error($conexao) . '</span></div>';
}

// Fechando a conexão
mysqli_stmt_close($stmt);
mysqli_close($conexao);

echo $mensagem;

echo '<meta http-equiv="refresh" content="3;url=tabela.php" />';
