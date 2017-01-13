<?php
include "util/url.php";
include "util/consultas.php";
$cn = db_connect();
$termino = $_GET['termino'];

$sqlNoticiaBuscar = "SELECT * from noticia WHERE no_desc LIKE '%".$termino."%' OR no_titulo LIKE '%".$termino."%'";
$rsNoticiaBuscar = mysql_query($sqlNoticiaBuscar);
$nNoticiaBuscar = mysql_num_rows($rsNoticiaBuscar);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Impact Perú - Blog</title>
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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1128947203819701";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <?php include("header.php");?>
    
    <div class="container-fluid text-center" id="blog">
        <div class="container">
            <div class="row">
                <img src="img/blog.png" alt="">
                <h2><b>PUÑO Y LETRA</b><br>NOVEDADES DEL MUNDO DIGITAL</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="inter-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <?php 
                            for ($i = 0; $i < $nNoticiaBuscar; $i++) {
                                $no_titulo = mysql_result($rsNoticiaBuscar, $i, "no_titulo");
                                $no_subtitulo = mysql_result($rsNoticiaBuscar, $i, "no_subtitulo");
                                $no_url = mysql_result($rsNoticiaBuscar, $i, "no_url");
                                $no_img = mysql_result($rsNoticiaBuscar, $i, "no_img");
                                $no_desc2 = mysql_result($rsNoticiaBuscar, $i, "no_desc2");
                        ?>
                        <article class="row">
                            <img src="img/icon-noticia.png" alt="" class="icon">
                            <h2><?php echo $no_titulo; ?></h2>
                            <h3><?php echo $no_subtitulo; ?></h3>
                            <img src="<?php echo $url.'img/'.$no_img; ?>" alt="" class="img-noticia">
                            <p><?php echo $no_desc2; ?></p>
                            <div class="text-center">
                                <a href="<?php echo $url."noticia/".$no_url; ?>" class="leyendo">- SEGUIR LEYENDO -</a>
                            </div>
                            <div class="redes text-right">
                                <span><b>15 de Octubre</b>, 2016</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>

                <?php include("aside.php"); ?>

            </div>
        </div>
    </div>    
    <?php include("footer.php");?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
            $(".md6").addClass("active");

            $('html, body').stop().animate({scrollTop: $("#inter-blog").offset().top}, 1000);
        });
    </script>
  </body>
</html>