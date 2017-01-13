<?php

//$url = "https://www.mediaimpact.pe/";
//$urladmin = "https://www.mediaimpact.pe/admin/";

$url = "";
$urladmin = "localhost/mediaImpact/admin/";
$nombre = "MI";

function transFecha($no_fecha){
	$porciones = explode("-", $no_fecha);
	$anio = $porciones[0];
	$dia = $porciones[2];

	$meses = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	$mesFinal = $meses[date('n', strtotime($no_fecha))];

	return "<b>".$dia." de ".$mesFinal."</b>, ".$anio;
}
?>