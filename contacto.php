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
    <title>Media Impact Perú - Comunícate con nosotros</title>
    <meta name="description" content="Comunícate con nosotros y uno de nuestros ejecutivos coordinará contigo a nuestro mail empecemos@mediaimpact.pe o a nuestro teléfono 3445277." />
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
    <div class="container-fluid text-center" id="contacto">
        <div class="container">
            <div class="row">
                <img src="img/cafe.png" alt="">
                <h2><b>¿UN CAFÉ?</b><br>EMPECEMOS YA TU NUEVO PROYECTO</h2>
                <p>Nos gustaría conocerte y poder brindarte ideas brillantes.</p>
                <a class="ancla" href="#cafe">¡EMPECEMOS!</a>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="cafe">
        <div class="container">
            <div class="row form">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>¡Contáctanos!</h3>
                    <ul>
                        <li><i class="icon-icon-18" aria-hidden="true"></i> 01 344 5277 / 01 496 5206</li>
                        <li><i class="icon-icon-13" aria-hidden="true"></i> empecemos@mediaimpact.pe</li>
                    </ul>

                    <p>Síguenos:</p>
                    <ol>
                        <li><a href="https://www.facebook.com/MediaImpactPeru" target="_blank"><i class="icon-icon-19" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.twitter.com/mediaimpactperu" target="_blank"><i class="icon-icon-20" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/mediaimpactperu/" target="_blank"><i class="icon-icon-16" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/3356875?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A3356875%2Cidx%3A1-2-2%2CtarId%3A1439494874225%2Ctas%3Amedia%20impact" target="_blank"><i class="icon-icon-21" aria-hidden="true"></i></a></li>
                    </ol>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>¡Escríbenos!</h3>
                    <form action="enviarform.php" method="POST">
                        <label for="nombres">Hola soy</label>
                        <input type="text" placeholder="Nombre y apellido" name="nombres" required>
                        <label for="empresa">Trabajo en</label>
                        <input type="text" placeholder="Nombre de organización" name="empresa" required>
                        <label for="correo">Mi correo es</label>
                        <input type="text" placeholder="Correo electrónico" name="correo" required>
                        <label for="servicio">Me interesa</label>
                        <select name="servicio" required>
                          <option value="Branding">Branding</option>
                          <option value="Marketing Digital">Marketing Digital</option>
                        </select>
                        <textarea name="consulta" rows="3" placeholder="Consulta"></textarea>
                        <button>Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>     
    <?php include("footer.php");?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
            $(".md5").addClass("active");
        });
    </script>
  </body>
</html>