<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--Nosso CSS-->
  <link rel="stylesheet" href="css/nosso.css">
  <title>Senninha</title>
</head>

<body>
  <?php include 'inc/nav.php'; ?>
  <?php include 'inc/header.php'; ?>

  <div class="container">
    <div class="row">
      <img src="img/s1.png" class="col-8 offset-2 col-md-8 offset-md-2 col-lg-4 offset-lg-0 img-fluid" alt=" imagem de menino com cabelo castanho, risonho, com macacão vermelho, tênis azul e mochila verde. O menino tem o rótulo amarelo de Senninha" />
      <section class="col-10 col-md-8 col-lg-7 ">
        <h1 class="my-3 py-3"> Senninha</h1>
        <p>O Senninha é um garoto que adora pilotar seu carro de corrida e tem o sonho de ser piloto de Fórmula 1 quando crescer. Ele é muito determinado, talentoso e bem-humorado, mas é um pouquinho apressado... Quer tudo para agora! Quando não está na escola ou cuidando de sua coleção de carrinhos, está treinando na pista.
        </p>
        <p>Conheça mais sobre esse personagem!</p>
      </section>
    </div>
    <main>

      <div class="row align-items-center">

        <section class="col-sm-12 col-md-3 col-lg-3 ">
          <div class="card">
            <img src="img/sorigem.png" class="card-img-top img-fluid" alt="imagem do senninha em preto e branco e uma faixa branca na parte superior da imagem, na faixa e em vermelho está escrito origem">
            <div class="card-body">

              <p class="card-text">Quando o Senninha foi lançado seu público-alvo era de crianças até 11 anos e atualmente é para 3 a 6 anos. </p>
              <p></p>
              <a class="btn btn-dark" href="origem.php">Saiba mais</a>
            </div>
          </div>
        </section>

        <section class="col-sm-12 col-md-3 col-lg-3 ">
          <div class="card">
            <img src="img/sprodutos.png" class="card-img-top img-fluid" alt="imagem do senninha em preto e branco e uma faixa branca na parte superior da imagem, na faixa e em vermelho está escrito produtos">
            <div class="card-body">

              <p class="card-text">O avião da Azul já foi pintado com o personagem e viajou pelo Brasil celebrando os 25 anos da criação do Senninha.</p>
              <a class="btn btn-dark" href="produtos.php">Saiba mais</a>
            </div>
          </div>
        </section>

        <section class="col-sm-12 col-md-3 col-lg-3 ">
          <div class="card">
            <img src="img/spersona.png" class="card-img-top img-fluid " alt="imagem do senninha em preto e branco e uma faixa branca na parte superior da imagem, na faixa e em vermelho está escrito personagens">
            <div class="card-body">
              <p class="card-text">Principais personagens da turma do Senninha são: Neco, Gabi, Becão, Bicão, JJ e Braço Duro.</p>
              <a class="btn btn-dark" href="personagens.php">Saiba mais</a>
            </div>
          </div>
        </section>

        <section class="col-sm-12 col-md-3 col-lg-3 ">

          <div class="card">
            <img src="img/srevistas.png" class="card-img-top img-fluid" alt="imagem do senninha em preto e branco e uma faixa branca na parte superior da imagem, na faixa e em vermelho está escrito revistas">
            <div class="card-body">
              <p class="card-text">O gibi núemro 0 foi lançado em abril de 1994. Hoje, são mais de 110 gibis disponibilizados gratuitamente. </p>
              <a class="btn btn-dark" href="revistas.php">Saiba mais</a>
            </div>
          </div>
        </section>

      </div>
      </article>

      <p class="text-center"> Fonte:https://www.ayrtonsenna.com.br/nos-28-anos-de-senninha-confira-28-curiosidades-sobre-o-personagem/ </p>

      <?php include 'inc/footer.php'; ?>

      <script src="js/bootstrap.min.js"></script>

</body>

</html>