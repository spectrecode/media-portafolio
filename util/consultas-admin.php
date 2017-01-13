<?php

include "conexion.php";

$cn = db_connect();

$sqlSliderAdmin = "SELECT * FROM slider";
$rsSliderAdmin = mysql_query($sqlSliderAdmin);
$nSliderAdmin = mysql_num_rows($rsSliderAdmin);

$sqlNoticiaAdmin = "SELECT no.*, ca.* FROM noticia no INNER JOIN categoria ca ON no.cat_id = ca.cat_id";
$rsNoticiaAdmin = mysql_query($sqlNoticiaAdmin);
$nNoticiaAdmin = mysql_num_rows($rsNoticiaAdmin);

$sqlCategoriaAdmin = "SELECT * FROM categoria";
$rsCategoriaAdmin = mysql_query($sqlCategoriaAdmin);
$nCategoriaAdmin = mysql_num_rows($rsCategoriaAdmin);

?>