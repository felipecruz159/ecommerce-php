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