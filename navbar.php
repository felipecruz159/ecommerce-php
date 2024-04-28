<?php include 'config.php'; ?>
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
            <span>
                <?= $name ?>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tabela.php">
                        Tabela
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro_produtos.php">Cadastro de Produtos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>