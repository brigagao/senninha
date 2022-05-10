<?php $page = basename($_SERVER['PHP_SELF']) ?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
    aria-controls="#navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
    <img src="img/logo.png" width="30px" height="30px" class="d-inline-block align-top" alt="Logo">
    Portal Senninha
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Senninha </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item <?php if ($page == "origem.php") : echo "disabled"; endif; ?>"href="origem.php">Origem</a></li>
          <li><a class="dropdown-item <?php if ($page == "senninha.php") : echo "disabled"; endif; ?>"href="senninha.php">Senninha e Sua Turma</a></li>
          <li><a class="dropdown-item <?php if ($page == "curiosidades.php") : echo "disabled"; endif; ?>"href="curiosidades.php">Curiosidades</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item <?php if ($page == "personagens.php") : echo "disabled"; endif; ?>"href="personagens.php">Personagens</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item <?php if ($page == "Revista.php") : echo "disabled"; endif; ?>"href="Revista.php">Revistas</a></li>
          <li><a class="dropdown-item <?php if ($page == "desenhistas.php") : echo "disabled"; endif; ?>"href="desenhistas.php">Desenhistas</a></li>
          <li><a class="dropdown-item <?php if ($page == "animacao.php") : echo "disabled"; endif; ?>"href="animacao.php">Animação</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item <?php if ($page == "produtos.php") : echo "disabled"; endif; ?>"href="produtos.php">Produtos</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Senna</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item <?php if ($page =="ayrton.php") : echo "disabled"; endif; ?>"href="ayrton.php">Ayrton Senna</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item <?php if ($page =="Historia.php") : echo "disabled"; endif; ?>"href="Historia.php">História</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item <?php if ($page =="corridas.php") : echo "disabled"; endif; ?>"href="corridas.php">Corridas</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Instituto</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item <?php if ($page == "instituto.php") : echo "disabled"; endif; ?>"href="instituto.php">Instituto</a></li>
          <li><a class="dropdown-item <?php if ($page == "iniciativa.php") : echo "disabled"; endif; ?>"href="iniciativa.php">Iniciativas</a></li>
          <li><a class="dropdown-item <?php if ($page == "apoie.php") : echo "disabled"; endif; ?>"href="apoie.php">Apoie</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sobre
          Nós</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item <?php if ($page == "membros.php") : echo "disabled"; endif; ?>"href="membros.php">Membros</a></li>
          <li><a class="dropdown-item <?php if ($page == "contato.php") : echo "disabled"; endif; ?>"href="contato.php">Contato</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($page == "normas.php") : echo "disabled"; endif; ?>"href="normas.php">Política de Privacidade</a>
      </li>


      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Ok</button>
      </form>
    </ul>
  </div>
  </div>
</nav>