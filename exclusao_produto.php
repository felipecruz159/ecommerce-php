<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <!-- Header section -->
    <?php include 'navbar.php'; ?>

    <!-- Contact section -->
    <section class="contact_section layout_padding">
        <div>
            <h1>Tem certeza que deseja excluir?</h1>
            <a href="tabela.php"><button>Cancelar</button></a>
            <a href="processa_exclusao_produto.php?id=<?=$_GET['id_produto']?>"><button>Confirmar</button></a>
        </div>
    </section>

    <?php
// Inclua o arquivo de configuração
// require 'config.php';

// // Verifique se o parâmetro id_produto está definido na URL
// if(isset($_GET['id_produto'])) {
//     $id = $_GET['id_produto'];

//     // Consulta SQL para selecionar o produto pelo ID
//     $sql = "SELECT * FROM produtos WHERE id_produto = '$id'";
//     $result = $sistema_vendas->query($sql);

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             // Verifica se o arquivo existe antes de tentar removê-lo
//             $foto_produto = $row["fotos_produto"];
//             $caminho_foto = $foto_produto;

//             if (file_exists($caminho_foto)) {
//                 // Remove o arquivo
//                 if (unlink($caminho_foto)) {
//                     echo "A foto '$foto_produto' foi removida com sucesso.<br>";
//                 } else {
//                     echo "Erro ao remover a foto '$foto_produto'.<br>";
//                 }
//             } else {
//                 echo "O arquivo '$foto_produto' não existe.<br>";
//             }
//         }
//     } else {
//         echo "Nenhum produto encontrado com o ID fornecido.";
//     }
// } else {
//     echo "ID do produto não fornecido na URL.";
// }
?>
    <!-- Footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
        </div>
    </footer>

    <!-- JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>