<?php
include "util/url.php";
include "util/consultas.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Impact Perú – Branding, Publicidad, Diseño, Video, Web, Redes Sociales, SEO</title>
    <meta name="description" content="Los servicios que ofrecemos son Branding, Publicidad, Diseño gráfico, Videos animados, BTL, Marketing Digital, Web, Redes Sociales, SEO, SEM y APPs." />
    <link href="img/logo.png" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="publisher" href="https://plus.google.com/111293073296492849766">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php include("header.php");?>
    <div class="container-fluid text-center" id="servicios">
        <div class="container">
            <div class="row">
                <img src="img/especialistas-en.png" alt="">
                <h2><b>¿QUÉ HACEMOS?</b><br>BRANDING Y MARKETING DIGITAL</h2>
                <p>Es nuestro combustible diario. Tenemos las cualidades necesarias que ayudarán a desarrollar tu proyecto de manera exitosa.</p>
                <a class="ancla" href="#branding">¡EMPECEMOS!</a>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="branding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <img src="img/branding.png" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <h2><i class="fa fa-caret-right" aria-hidden="true"></i> BRANDING</h2>
                            <p>Para nosotros el branding significa dar un paso más allá de lo bueno para volverlo increíble.</p>
                            <ul>
                                <li><i class="icon-icon-7" aria-hidden="true"></i><br><h4>DISEÑO GRÁFICO</h4></li>
                                <li><i class="icon-icon-8" aria-hidden="true"></i><br><h4>BRANDING</h4></li>
                                <li><i class="icon-icon-9" aria-hidden="true"></i><br><h4>AUDIOVISUAL</h4></li>
                            </ul>
                            <label>Naming, logotipo, slogan, rebranding, editorial, BTL, packaging, spots, animaciones, señalética, retail.</label>
                            <a href="portafolio"><i class="icon-icon-2" aria-hidden="true"></i> ver portafolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="marketing-digital">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <h2><i class="fa fa-caret-right" aria-hidden="true"></i> MARKETING DIGITAL</h2>
                            <p>En un mundo donde se respira marketing digital, necesitas las herramientas necesarias para potenciar tu negocio.</p>
                            <ul>
                                <li><i class="icon-icon-4" aria-hidden="true"></i><br><h4>RRSS</h4></li>
                                <li><i class="icon-icon-5" aria-hidden="true"></i><br><h4>WEB Y APPS</h4></li>
                                <li><i class="icon-icon-6" aria-hidden="true"></i><br><h4>PUBLICIDAD ONLINE</h4></li>
                            </ul>
                            <label>Naming, logotipo, slogan, rebranding, editorial, BTL, packaging, spots, animaciones, señalética, retail.</label>
                            <a href="portafolio"><i class="icon-icon-2" aria-hidden="true"></i> ver portafolio</a>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <img src="img/marketing-digital.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>         
    <?php include("cafe.php");?>
    <?php include("footer.php");?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
            $(".md3").addClass("active");
        });
    </script>
  </body>
</html>