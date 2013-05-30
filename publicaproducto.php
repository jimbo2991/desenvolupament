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
if ($_REQUEST['compania']==""){
	$_SESSION['errcompania']="Escriba la compañia";
	$valido=false;
	}
if ($_REQUEST['precio']==""){
	$_SESSION['errprecio']="Escriba el precio";
	$valido=false;
	}
	if (!is_numeric($_REQUEST['precio'])){
	$_SESSION['errprecio']="El precio debe ser numerico";
	$valido=false;
	}
	
if ($_REQUEST['descripcion']==""){
	$_SESSION['errdescripcion']="Escribe la descripcion";
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

	header('location:newproducto.php');
	}
else {
$titulo=$_REQUEST['titulo'];
$compania=$_REQUEST['compania'];
$plataforma=$_REQUEST['plataforma'];
$precio=$_REQUEST['precio'];
$descripcion=$_REQUEST['descripcion'];
$genero=$_REQUEST['genero'];
$foto="imagenes/" . $nombre;
$vendedor=$_SESSION['user'];
$fecha=date("Y-m-d");
$valoracion=$_REQUEST['valoracion'];
}
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select codigo_videojuego from videojuego order by codigo_videojuego desc limit 0,1;");
if (!$result){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
else {
while ($row=mysqli_fetch_row($result)) {
$cod_videojuego=$row[0]+1;
}
echo "<br>" .$cod_videojuego;
}

$result2=mysqli_query($link,"insert into videojuego values ('$cod_videojuego', '$titulo', '$compania', '$plataforma', '$fecha', '$precio', '$descripcion', '$genero', '$foto', 1);");
$result3=mysqli_query($link,"insert into vende values ('$cod_videojuego','$vendedor');");
$result4=mysqli_query($link,"insert into valora values ('$cod_videojuego', '$vendedor','$valoracion');");


if (!$result2){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
if (!$result3){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
if (!$result4){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}

mysqli_free_result($result);
mysqli_close($link); 
echo "<h1>Videojuego registrado correctamente<h1>";
header('location:index.php');
?>