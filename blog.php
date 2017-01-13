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
    <title>Media Impact Perú - Ingresa a nuestro blog</title>
    <meta name="description" content="Ingresa a nuestro blog y conoce las últimas tendencias de publicidad, diseño gráfico, videos animados, páginas web, redes sociales y publicidad online."/>
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
    <div class="container-fluid text-center" id="destacados">
        <div class="row">
            <?php 
                for ($i = 0; $i < $nNoticiaDest; $i++) {
                    $no_titulo = mysql_result($rsNoticiaDest, $i, "no_titulo");
                    $no_subtitulo = mysql_result($rsNoticiaDest, $i, "no_subtitulo");
                    $no_url = mysql_result($rsNoticiaDest, $i, "no_url");
                    $no_img2 = mysql_result($rsNoticiaDest, $i, "no_img2");
            ?>
            <div class="col-lg-4">
                <div class="row">
                    <a href="<?php echo $url."noticia/".$no_url; ?>">
                        <div class="desc-header">
                            <h2><?php echo $no_titulo; ?></h2>
                            <p><?php echo $no_subtitulo; ?></p>
                        </div>
                        <img src="<?php echo $url.'img/'.$no_img2; ?>" alt="">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div> 
    <div class="container-fluid" id="inter-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <?php 
                            for ($i = 0; $i < $nNoticia; $i++) {
                                $no_titulo = mysql_result($rsNoticia, $i, "no_titulo");
                                $no_subtitulo = mysql_result($rsNoticia, $i, "no_subtitulo");
                                $no_url = mysql_result($rsNoticia, $i, "no_url");
                                $no_img = mysql_result($rsNoticia, $i, "no_img");
                                $no_fecha = mysql_result($rsNoticia, $i, "no_fecha");
                                $no_desc2 = mysql_result($rsNoticia, $i, "no_desc2");
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
                                <span><?php echo transFecha($no_fecha);?></span>
                                <ul>
                                    <li><a href="javascript:void();" onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo $url.'noticia/'.$no_url; ?>','','width=650,height=450');"><i class="icon-icon-19" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void();" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url.'noticia/'.$no_url; ?>&source=Oloblogger','','width=650,height=450');"><i class="icon-icon-21" aria-hidden="true"></i></a></li>
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
        });
    </script>
  </body>
</html>