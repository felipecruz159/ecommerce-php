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
        $mensagem = '<div style="background-color: #FFCCCC; text-align: center; padding: 10px; margin-top: 50px;"><span style="color:red;">Você deve preencher todos os campos obrigatórios!</span></div>';
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
                $sql = "INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, codigo_barras, fornecedor_produto, qtd_estoque, fotos_produto) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conexao, $sql);
                mysqli_stmt_bind_param($stmt, "ssdssis", $nome, $descricao, $preco, $codigo, $fornecedor, $estoque, $caminho_destino);

                if (mysqli_stmt_execute($stmt)) {
                    $mensagem = '<div style="background-color: #CCFFCC; text-align: center; padding: 10px; margin-top: 50px;"><span style="color:green;">Produto cadastrado com sucesso!</span></div>';
                } else {
                    $mensagem = '<div style="background-color: #FFCCCC; text-align: center; padding: 10px; margin-top: 50px;"><span style="color:red;">Erro ao cadastrar o produto: ' . mysqli_error($conexao) . '</span></div>';
                }

                // Fechando a conexão
                mysqli_stmt_close($stmt);
                mysqli_close($conexao);
            } else {
                $mensagem = '<div style="background-color: #FFCCCC; text-align: center; padding: 10px; margin-top: 50px;"><span style="color:red;">Erro ao fazer upload da foto!</span></div>';
            }
        } else {
            // Se o campo 'fotos' não estiver presente no formulário
            $mensagem = '<div style="background-color: #FFCCCC; text-align: center; padding: 10px; margin-top: 50px;"><span style="color:red;">Você deve selecionar uma foto!</span></div>';
        }
    }
    echo $mensagem;
    echo '<meta http-equiv="refresh" content="3;url=tabela.php" />';
}
?>