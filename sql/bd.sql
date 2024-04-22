CREATE DATABASE sistema_vendas;

USE sistema_vendas;

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(60),
    descricao_produto VARCHAR(255),
    preco_produto DECIMAL(10,2),
    codigo_barras VARCHAR(14),
    fornecedor_produto VARCHAR(100),
    qtd_estoque INT,
    fotos_produto VARCHAR(255)
);
