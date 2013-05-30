<?
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
?>
<html>
<head>
<title>DKgamers</title>
</head>
<body>
<?php
// Cambie el Origen & Destino de Base de Datos
$cod_articulo=$_SESSION['noticia'];
$valido=true;
if ($_REQUEST['area1']==""){
	$_SESSION['errcomentario']="Escriba el comentario";
	$valido=false;
	}
if ($_REQUEST['terminos']!="1"){
	$_SESSION['errterminos']="Debe aceptar los terminos y condiciones";
	$valido=false;
	}

if ($valido!=true){	
	header('location:articulo.php?noticia='.$cod_articulo);
	}
else {
	
$comentario=$_REQUEST['area1'];
$usuario=$_SESSION['user'];



}
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"insert into comentarios (codigo_noticia,usuario,comentario) values ('$cod_articulo','$usuario','$comentario');");
if (!$result){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
mysqli_free_result($result);
mysqli_close($link); 
header("location:articulo.php?noticia=".$cod_articulo);
?>