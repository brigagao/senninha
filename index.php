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

  <div class="container-fluid">
    <main>
      <article class=" mt-5">
        <h1 class="mb-5 mt-5">CONHEÇA</h1>
        <div class="row">
          <div class="col-4 col-lg-4 col-xl-4 mx-auto mb-3">
            <a href="personagens.php">Personagens<img src="img/seninhapeq.png" class="img-fluid rounded-circle" alt="Imagem responsiva"></a>
          </div>
          <div class="col-8 col-lg-4 col-xl-7 mx-auto mb-3">
            <p>Senninha é um menino de oito anos que adora corridas. Quando não está na escola, ele corre na minipista do bairro onde mora. Ele tem um grupo de amigos que são "pilotos" como ele. Ele é determinado, não gosta de perder e quer ser piloto de Fórmula 1 quando crescer. Seu oponente é Braço Duro, e ele faz um grande esforço para usar muitas trapaças para vencer.</p>
          </div>
          <h1 class="mb-5 mt-5">AVENTURE-SE</h1>
          <p>Você pode acompanhar as aventuras do Senninha pelos quadrinhos, em animações pela Tv Gloobinho ou a NetFlix, em vídeos e desenhos no YouTube e até se divertir através de jogos disponíveis em seu Aparelhos com sistema Android ou IOS.</p>
        </div>
        <hr class="dropdown-divider">
      </article>

      <aside class="mt-5">
        <div class="row">
          <div class="col-6 col-lg-6 col-xl-4 mx-auto mb-3">
            <a href="revista.php">Revistas<img src="img/hq.jpg" class="img-fluid" alt="Imagem responsiva"></a>
          </div>
          <div class="col-6 col-lg-6 col-xl-4 mx-auto mb-3">
            <a href="ayrton.php">Ayrton Senna<img src="img/netflix.jpg" class="img-fluid" alt="Imagem responsiva"></a>
          </div>
        </div>

        <div class="row">
          <div class="col-6 col-lg-6 col-xl-4 mx-auto mb-3">
            <a href="animacao.php">Animação<img src="img/seninhagloo1.png" class="img-fluid" alt="Imagem responsiva"></a>
          </div>
          <div class="col-6 col-lg-6 col-xl-4 mx-auto mb-3">
            <a href="produtos.php">Produtos<img src="img/seninha31.png" class="img-fluid" alt="Imagem responsiva"></a>
          </div>
        </div>
        <hr class="dropdown-divider">
      </aside>
    </main>

  </div>

  <?php include 'inc/footer.php'; ?>

  <script src="js/bootstrap.min.js"></script>

  <!-- Botão voltar para cima
  <button onclick="backToTop();" id="btnTop"><img src="img/topo.png" alt="Imagem responsiva"></button>
  <script>
    jQuery(document).ready(function($) {
          $ {
            ".scroll"
          }.click(function(event) {
              event.preventDefault();
              $('html,body').animate({
                  scrollTop: $(this.hash).offset().top .200);
              });
          });
  </script>

  <script>
    window.onscroll = function() {
      scroll();
    }

    Function scroll() {
      var btn = document.getElementById("btnTop");
      if (document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    }

    Function backToTop() {
      document.documentElement.scrollTop = 0;
    }
  </script> -->
</body>

</html>