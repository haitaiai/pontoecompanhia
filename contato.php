<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Ponto e Companhia | Contato</title>
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php include 'menu.php';?>
    
    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12 visible-lg-inline visible-md-inline">
          <h1 style="font-family: 'Abel', sans-serif; font-size: 45px">Entre em contato conosco!</h1>
        </div>
      </div>

      <br>
      <br>

      <div class="row" style="margin-bottom: 15px">
        <center><h3 style="font-family: 'Abel', sans-serif;">(62) 99430-6145 / (62) 98145-8869 <br>
             (62) 98549-9749 / (62) 3703-8365 <br></h3></center><br>
      </div>

        <div class="row">

         

          <div class="col-lg-5 col-md-5 visible-lg-inline visible-md-inline" style="margin-top: -6px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d731.7346917280362!2d-48.931481803716856!3d-16.289643427421186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-16.2894663!2d-48.9315925!5e0!3m2!1spt-BR!2sbr!4v1493302800246" width="650" height="300" frameborder="0" style="border:0; border-radius: 15px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-2 col-md-2 visible-lg-inline visible-md-inline"></div>

          <div class="col-lg-4 col-md-4 visible-lg-inline visible-md-inline">
            <div class="form-group">
            <!-- Início form -->
              <form action="send_form_email.php" method="post" name="formContato">

                
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" style="margin-top: 3px">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" style="margin-top: 3px;">
                <textarea name="mensagem" class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem" style="margin-top: 3px;"></textarea>
                <button type="submit" class="btn btn-primary" name="BTEnvia" style="margin-top: 3px; margin-left: 5px;  float: right;">Enviar</button>
                <button type="reset" class="btn btn-danger" style="margin-top: 3px;float: right;">Limpar</button>


              </form>
            </div>
          </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>