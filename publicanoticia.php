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
$valido=true;
if ($_REQUEST['titulo']==""){
	$_SESSION['errtitulo']="Escriba el titulo";
	$valido=false;
	}
if ($_REQUEST['texto']==""){
	$_SESSION['errtexto']="Escriba el contenido del articulo";
	$valido=false;
	}
if( !isset($_FILES['archivo']) ){
  $_SESSION['errorfoto']= 'Ha habido un error, tienes que elegir un archivo<br/>';
  $valido=false;
}else{

  $nombre = $_FILES['archivo']['name'];
  $nombre_tmp = $_FILES['archivo']['tmp_name'];
  $tipo = $_FILES['archivo']['type'];
  $tamano = $_FILES['archivo']['size'];

  $ext_permitidas = array('jpg','jpeg','gif','png');
  $partes_nombre = explode('.', $nombre);
  $extension = end( $partes_nombre );
  $ext_correcta = in_array($extension, $ext_permitidas);

  $tipo_correcto = preg_match('/^image\/(pjpeg|jpeg|gif|png)$/', $tipo);

  $limite = 1024 * 1024;

  if( $ext_correcta && $tipo_correcto && $tamano <= $limite ){
    if( $_FILES['archivo']['error'] > 0 ){
      $_SESSION['errorfoto']= 'Error: ' . $_FILES['archivo']['error'] . '<br/>';
	  $valido=false;
    }else{
      echo 'Nombre: ' . $nombre . '<br/>';
      echo 'Tipo: ' . $tipo . '<br/>';
      echo 'Tamaño: ' . ($tamano / 1024) . ' Kb<br/>';
      echo 'Guardado en: ' . $nombre_tmp;

      if( file_exists( 'imagenes/'.$nombre) ){
        echo '<br/>El archivo ya existe: ' . $nombre;
		$valido=false;
      }else{
        move_uploaded_file($nombre_tmp,
          "imagenes/" . $nombre);

        echo "<br/>Guardado en: " . "imagenes/" . $nombre;
      }
    }
  }else{
    echo 'Archivo inválido';
	$valido=false;
  }
}



if ($valido!=true){	

	//header('location:newnoticia.php');
	}
else {
$titulo=$_REQUEST['titulo'];
$foto="imagenes/" . $nombre;
$texto=$_REQUEST['texto'];
$redactor=$_SESSION['user'];
$fecha=date("Y-m-d");
$hora=date("H:i:s");


}
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select codigo_noticia from noticia order by codigo_noticia desc limit 0,1;");
if (!$result){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
else {
while ($row=mysqli_fetch_row($result)) {
$cod_articulo=$row[0]+1;
}
echo "<br>" .$cod_articulo;
}

$result2=mysqli_query($link,"insert into noticia values ('$cod_articulo','$titulo','$foto','$texto','$fecha','$hora','$redactor');");


if (!$result2){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}

mysqli_free_result($result);
mysqli_close($link); 
header("location:articulo.php?noticia=$cod_articulo");
?>