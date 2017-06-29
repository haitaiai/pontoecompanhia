<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="description" content="Ponto e Companhia é uma empresa especializada em ponto eletrônico, desenvolvimento de websites e aplicações web. Contamos também com sistemas de controle de ponto, emissão de NF-e e gerenciamento de empresa.">
    <meta name="msvalidate.01" content="1A8AAE311035B283708B718FE10EB993" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Ponto e Companhia</title>
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <style type="text/css">
      a {
        color: black;
      }

      a:hover {
        color: black;
        text-decoration: none;
      }
    </style>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- Menu -->
    <?php include 'menu.php';?>
  <!-- Slides -->
    <?php include 'carousel-fade.php' ?>
  <!-- Informações abaixo dos slides --> 
    <div class="container">
  <!-- Linha de Informações sobre a empresa -->

      <div class="row">
        <a href="produtos.php"><h1 style="font-family: 'Abel', sans-serif; font-size: 45pxs">Conheça nossos produtos</h1></a>
      </div>
      <div class="row" style="margin-top: 40px;">
  <!-- Imagem com descrição 1 -->
       <a href="produtos.php"> <div class="col-lg-3 col-md-3 visible-lg-inline visible-md-inline"">
          <img src="img/sistema-ponto-secullum.jpg" height="350" width="350" style="border-radius: 20px; alt="Sistema ponto secullum de controle de ponto eletronico">
            <div class="paragraph" style="margin-right: -90px"><center>
              <h4>Ponto Secullum 4</h4>
              
            </center></div>
        </div></a>
  <!-- Espaço entre uma imagem e outra -->
        <div class="col-lg-1 col-md-1 visible-lg-inline visible-md-inline""></div>
  <!-- Imagem com descrição 2 -->
        <a href="produtos.php"><div class="col-lg-3 col-md-3 visible-lg-inline visible-md-inline">
                  <img src="img/fechadura.jpg" width="350" height="350" style="border-radius: 20px; alt="Fechadura eletronica">
                    <div class="paragraph" style="margin-right: -90px"><center>
                      <h4>Fechadura Digital</h4>
                      
                    </center></div>
                </div></a>
  <!-- Espaço entre uma imagem e outra -->
        <div class="col-lg-1 col-md-1 visible-lg-inline visible-md-inline""></div>
  <!-- Imagem com descrição 3 -->
        <a href="produtos.php"><div class="col-lg-3 col-md-3 visible-lg-inline visible-md-inline">
                  <img src="img/catraca-black.png" height="350" width="350" style="border-radius: 20px;" alt="Catraca preta">
                    <div class="paragraph" style="margin-right: -90px"><center>
                      <h4>Catraca</h4>
                      
                    </center></div>
                </div></a>
  <!-- Espaço entre imagem e borda -->
        <div class="col-lg-1 col-md-1 visible-lg-inline visible-md-inline""></div>

      </div>

    </div>
  <!-- Rodapé -->
    <?php include 'footer.php' ?>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>