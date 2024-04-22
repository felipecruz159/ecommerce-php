<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    <?= $name ?>
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="styles/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="styles/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php require 'navbar.php'; ?>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Cadastro - Produto
          <?= @$mensagem ?>
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form method="POST" action="processa_cadastro_produtos.php">
            <div>
              <input type="text" placeholder="Nome" name="nome" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Descrição" name="descricao" />
            </div>
            <div>
              <input type="number" placeholder="Preço" step="0.01" name="preco" />
            </div>
            <div>
              <input type="text" placeholder="Código de Barras" name="codigo" />
            </div>
            <div>
              <input type="text" placeholder="Fornecedor" name="fornecedor" />
            </div>
            <div>
              <input type="number" placeholder="Quantidade em estoque" name="estoque" />
            </div>
            <div>
              <input type="file" placeholder="Fotos do produto" name="fotos" />
            </div>
            <div class="d-flex ">
              <button type="submit" name="envio">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <!-- footer section -->
  <footer class=" footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>