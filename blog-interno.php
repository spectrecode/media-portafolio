<?php
include "util/url.php";
include "util/consultas.php";
$cn = db_connect();
$no_url = $_GET['no_url'];

$sqlNoti = "SELECT * FROM noticia WHERE no_url='$no_url'";
$rsNoti = mysql_query($sqlNoti);

$no_id = mysql_result($rsNoti, 0, "no_id");
$no_titulo = mysql_result($rsNoti, 0, "no_titulo");
$no_subtitulo = mysql_result($rsNoti, 0, "no_subtitulo");
$no_fecha = mysql_result($rsNoti, 0, "no_fecha");
$no_desc = mysql_result($rsNoti, 0, "no_desc");
$no_desc2 = mysql_result($rsNoti, 0, "no_desc2");
$no_img = mysql_result($rsNoti, 0, "no_img");
$no_url = mysql_result($rsNoti, 0, "no_url");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $no_titulo; ?> | Media Impact Perú</title>
    <meta name="description" content="<?php echo $no_desc2; ?>" />
    <meta property="og:url" content="<?php echo $url.'noticia/'.$no_url;?>"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $no_titulo; ?>" />
    <meta property="og:description" content="<?php echo $no_desc2; ?>" />
    <meta property="og:site_name" content="Media Impact Perú" />
    <meta property="og:image" content="<?php echo $url.'img/'.$no_img;?>" />
    <meta property="og:image:width" content="619" />
    <meta property="og:image:height" content="347" />
    <link href="../img/logo.png" rel="shortcut icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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
                <img src="../img/blog.png" alt="">
                <h2><b>PUÑO Y LETRA</b><br>NOVEDADES DEL MUNDO DIGITAL</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="not-inter-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 noticia-interna">
                    <div class="col-lg-12">
                        <article class="row">
                            <img src="../img/icon-noticia.png" alt="" class="icon">
                            <h2><?php echo $no_titulo; ?></h2>
                            <h3><?php echo $no_subtitulo; ?></h3>
                            <img src="<?php echo $url."img/".$no_img; ?>" alt="" class="img-noticia">
                            <?php echo $no_desc; ?>
                            <div class="tags">
                                <ul>
                                    <li><i class="icon-icon-12" aria-hidden="true"></i></li>
                                    <?php 

                                    $sqlTags = "SELECT t.tag_name, t.tag_url from tag t INNER JOIN noticia_tag nt ON t.tag_id=nt.tag_id WHERE nt.no_id=$no_id";
                                    $rsTags = mysql_query($sqlTags);
                                    $nTags = mysql_num_rows($rsTags);

                                    for ($i = 0; $i < $nTags; $i++) {
                                        $tag_name = mysql_result($rsTags, $i, "tag_name");
                                        $tag_url = mysql_result($rsTags, $i, "tag_url");

                                        if($i==$nTags-1){
                                    ?>
                                        <li><a href="<?php echo $url."tag/".$tag_url; ?>"><?php echo $tag_name; ?></a></li>
                                    <?php }else{ ?>
                                        <li><a href="<?php echo $url."tag/".$tag_url; ?>"><?php echo $tag_name; ?></a>,</li>    
                                    <?php }} ?>
                                </ul>
                            </div>
                            <div class="redes text-right">
                                <span><?php echo transFecha($no_fecha);?></span>
                                <ul>
                                    <li><a href="javascript:void();" onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo $no_titulo; ?>&p[summary]= <?php echo $no_subtitulo; ?>..&p[url]=<?php echo $url.'noticia/'.$no_url; ?>','','width=650,height=450');"><i class="icon-icon-19" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void();" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url.'noticia/'.$no_url; ?>&title=<?php echo $no_titulo; ?>&summary= <?php echo $no_subtitulo; ?>..&source=Oloblogger','','width=650,height=450');"><i class="icon-icon-21" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </article>
                        <div class="row">
                            <div class="fb-comments" data-href="http://localhost/mi/blog-interno.php" data-numposts="5" width="100%"></div>
                        </div>
                    </div>
                </div>

                <?php include("aside.php"); ?>

            </div>
        </div>
    </div>    
    <?php include("footer.php");?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        $(document).ready(function(){
            $(".md6").addClass("active");

            $('html, body').stop().animate({scrollTop: $("#not-inter-blog").offset().top}, 1000);
        });
    </script>
  </body>
</html>