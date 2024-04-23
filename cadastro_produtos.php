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
    <div class="container">
      <div class="heading_container">
        <h2>Cadastro - Produto</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="processa_cadastro_produtos.php" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="preco" placeholder="Preço" step="0.01" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="codigo" placeholder="Código de Barras" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fornecedor" placeholder="Fornecedor" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="estoque" placeholder="Quantidade em Estoque" required>
            </div>
            <div class="form-group">
              <input type="file" class="form-control-file" name="fotos" required>
            </div>
            <button type="submit" class="btn btn-primary" name="envio">Enviar</button>
          </form>
        </div>
      </div>
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