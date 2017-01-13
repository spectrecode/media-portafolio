                <aside class="col-lg-4">
                    <div class="col-lg-12">
                        <div class="row" id="buscar-blog">
                            <label for="search-input">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </label>
                            <input type="text" placeholder="Enterarme sobre..." id="search-input">
                        </div>
                        <div class="row" id="amamos-blog">
                            <h3>AMAMOS LO QUE HACEMOS</h3>
                            <p>Somos expertos en branding y marketing digital. Quisque non tempor erat, sed dapibus sapien. Vestibulum quis velit a lorem varius congue.</p>
                            <h4><i>&#x25B6;</i> BRANDING</h4>
                            <p>Creamos marcas, desarrollamos publicidad gráfica y material audiovisual.</p>
                            <h4><i>&#x25B6;</i> MARKETING DIGITAL</h4>
                            <p>Administramos redes sociales, desarrollamos páginas webs y apps e implementamos campañas de medios y mailing.</p>
                        </div>
                        <div class="row" id="fb-blog">
                            <div class="fb-page" data-href="https://www.facebook.com/MediaImpactPeru/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MediaImpactPeru/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MediaImpactPeru/">Media Impact</a></blockquote></div>
                        </div>
                        <div class="row" id="categorias-blog">
                            <div class="text-center">
                                <h3>CATEGORÍAS</h3>
                            </div>
                            <ul>
                                <?php 
                                    for ($i = 0; $i < $nCategoria; $i++) {
                                        $cate_name = mysql_result($rsCategoria, $i, "cate_name");
                                        $cate_url = mysql_result($rsCategoria, $i, "cate_url");
                                ?>
                                <li><a href="<?php echo $url."categoria/".$cate_url; ?>"><?php echo $cate_name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="row" id="rank-blog">
                            <div class="text-center">
                                <h3>LAS MÁS RANQUEADAS</h3>
                            </div>
                            <?php 
                                for ($i = 0; $i < $nNoticiaRank; $i++) {
                                    $no_titulo = mysql_result($rsNoticiaRank, $i, "no_titulo");
                                    $no_url = mysql_result($rsNoticiaRank, $i, "no_url");
                                    $no_fecha = mysql_result($rsNoticiaRank, $i, "no_fecha");
                                    $no_img = mysql_result($rsNoticiaRank, $i, "no_img");
                            ?>
                            <div class="noti-rank">
                                <a href="<?php echo $url."noticia/".$no_url; ?>">
                                    <img src="<?php echo $url."img/".$no_img; ?>" alt="">
                                    <h5><?php echo $no_titulo; ?></h5>
                                    <span><?php echo transFecha($no_fecha);?></span>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                        <!--div class="row" id="archivo-blog">
                            <div class="text-center">
                                <h3>LAS MÁS RANQUEADAS</h3>
                            </div>
                            <ul>
                                <li><a href=""><i>&#x25B6;</i> 2014</a></li>
                                <li><a href=""><i>&#x25B6;</i> 2015</a></li>
                                <li><a href=""><i>&#x25B6;</i> 2016</a></li>
                            </ul>
                        </div-->
                    </div>
                </aside>