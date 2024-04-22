<?php 
require 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $codigo = $_POST['codigo'];
    $fornecedor = $_POST['fornecedor'];
    $estoque = $_POST['estoque'];
    $fotos = $_POST['fotos'];
}

if( empty($nome) || empty($descricao) || empty($preco) || empty($codigo) || empty($fornecedor) || empty($estoque) || empty($fotos)){
    $mensagem = '<span style="color:red;">Você deve preencher todos os campos!</span>';
    echo $mensagem;
    echo '<meta http-equiv = "refresh" content = "2; url = cadastro_produtos.php" />';
} else{
    $mensagem = '<span style="color:green;">Produto cadastrado com sucesso!</span>';
    EnviarDados();
    echo $mensagem;
    echo '<meta http-equiv = "refresh" content = "2; url = cadastro_produtos.php" />';
}

function EnviarDados(){
    try{
        $conn = Conectar();
        $sql = "INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, codigo_barras, fornecedor_produto, qtd_estoque, fotos_produto) VALUES (?, ?, ?, ?, ?, ?, ?)";

    } catch(Exception $e){
        echo "Erro: " . $e->getMessage();
    }
    

}
