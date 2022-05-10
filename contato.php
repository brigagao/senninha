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

    <main>
        <div class="container-fluid">
            <article>

                <h1 class="text-center mt-5 mb-5">CONTATOS</h1>


                <div class="row ">
                    <div class="col-md-4">
                        <div class="dbox w-100 text-center ">
                            <img src="data:image/png;base64,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" />
                            <p class="mt-3">ESCRITÓRIO</p>
                            <p>Rua S do Senna, nº 13, Bairro Curva Rápida, São Roque/SP - CEP- 00.000.111</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-copilot-racing-flaticons-flat-flat-icons.png" />
                            <p class="mt-3">CONTATO</p>
                            <p><span>Telefone</span> <a class="text-black" href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="data:image/png;base64,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" />
                            <p class="mt-3">E-MAIL</p>
                            <p>senninha@instituicao.com.br</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">ENTRE EM CONTATO CONOSCO</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome Completo:</label>
                                        <input class="form-control" placeholder="Digite seu nome completo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" placeholder="Digite seu melhor e-mail">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <input class="form-control" placeholder="Digite qual departamento deseja">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mensagem</label>
                                        <textarea class="form-control" cols="30" rows="4" placeholder="Digite sua mensagem, para que possamos ajuda-lo"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <input type="submit" value="Enviar" class="btn btn-primary">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <?php include 'inc/footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>