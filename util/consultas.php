<?php

include 'conexion.php';

$cn = db_connect();

$sqlNoticia = "SELECT * from noticia ORDER BY no_fecha DESC";
$rsNoticia = mysql_query($sqlNoticia);
$nNoticia = mysql_num_rows($rsNoticia);

$sqlNoticiaRank = "SELECT * from noticia ORDER BY no_fecha DESC LIMIT 0,3";
$rsNoticiaRank = mysql_query($sqlNoticiaRank);
$nNoticiaRank = mysql_num_rows($rsNoticiaRank);

$sqlNoticiaDest = "SELECT * from noticia WHERE no_destacado=1 ORDER BY no_fecha DESC LIMIT 0,3";
$rsNoticiaDest = mysql_query($sqlNoticiaDest);
$nNoticiaDest = mysql_num_rows($rsNoticiaDest);

$sqlCategoria = "SELECT * from categoria ORDER BY cate_id DESC";
$rsCategoria = mysql_query($sqlCategoria);
$nCategoria = mysql_num_rows($rsCategoria);

?>

