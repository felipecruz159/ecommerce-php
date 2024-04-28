<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $codigo = $_POST['codigo'] ?? '';
    $fornecedor = $_POST['fornecedor'] ?? '';
    $estoque = $_POST['estoque'] ?? '';

    // Verifica se todos os campos obrigatórios foram preenchidos
    if (empty($nome) || empty($descricao) || empty($preco) || empty($codigo) || empty($fornecedor) || empty($estoque)) {
        $mensagem = '<span style="color:red;">Você deve preencher todos os campos obrigatórios!</span>';
    } else {
        // Verifica se o campo 'fotos' foi enviado corretamente
        if(isset($_FILES['fotos'])) {
            // Conexão com o banco de dados
            $conexao = mysqli_connect($servidor, $udb, $senha, $bdados);
            if (!$conexao) {
                die("Conexão falhou: " . mysqli_connect_error());
            }

            // Lógica para lidar com o envio de arquivos
            $fotos = $_FILES['fotos'];
            $diretorio_destino = 'fotos_produtos/';
            $caminho_destino = $diretorio_destino . basename($fotos['name']);

            if (move_uploaded_file($fotos['tmp_name'], $caminho_destino)) {
                // Inserção dos dados na tabela produtos
                $sql = "UPDATE produtos
                SET nome_produto = ?,
                    descricao_produto = ?,
                    preco_produto = ?,
                    codigo_barras = ?,
                    fornecedor_produto = ?,
                    qtd_estoque = ?,
                    fotos_produto = ?
                WHERE id_produto = ?;";
                $stmt = mysqli_prepare($conexao, $sql);
                mysqli_stmt_bind_param($stmt, "ssdssisd", $nome, $descricao, $preco, $codigo, $fornecedor, $estoque, $caminho_destino, $_GET['id']);

                if (mysqli_stmt_execute($stmt)) {
                    $mensagem = '<span style="color:green;">Produto editado com sucesso!</span>';
                } else {
                    $mensagem = '<span style="color:red;">Erro ao editar o produto: ' . mysqli_error($conexao) . '</span>';
                }

                // Fechando a conexão
                mysqli_stmt_close($stmt);
                mysqli_close($conexao);
            } else {
                $mensagem = '<span style="color:red;">Erro ao fazer upload da foto!</span>';
            }
        } else {
            // Se o campo 'fotos' não estiver presente no formulário
            $mensagem = '<span style="color:red;">Você deve selecionar uma foto!</span>';
        }
    }
    echo $mensagem;
    echo '<meta http-equiv="refresh" content="2;url=tabela.php" />';
}
?>