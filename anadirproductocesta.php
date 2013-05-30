<?
header('Content-Type: text/html; charset=ISO-8859-1');
if (!isset($_SESSION['codigo_pedido'])){
$_SESSION['codigo_pedido']=time();
}

?>
<html>
<head>
<title>DKgamers</title>
</head>
<body>
<center>
<?php



$cod_pedido=$_SESSION['codigo_pedido'];
$cliente=$_SESSION['user'];
$producto=$_REQUEST['add'];
echo '<br>'.$cod_pedido.'</br>';
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$select=mysqli_query($link,"select * from pedido where cod_pedido= '$cod_pedido';");
if (!$select){
	die("la consulta no se ha ejecutado".mysqli_error($link));
	}
$prueba=mysqli_num_rows($select);
if ($prueba==1){
$result2=mysqli_query($link,"insert into cesta values ('$cod_pedido','$producto');");
	if (!$result2){
		die("la consulta no se ha ejecutado".mysqli_error($link));
		}
	else {
		header('location:cesta.php');
		}
	}
else {

$result=mysqli_query($link,"insert into pedido (cod_pedido,cliente,validado) values ('$cod_pedido','$cliente','0');");
$result2=mysqli_query($link,"insert into cesta values ('$cod_pedido','$producto');");
if (!$result){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
else if (!$result2){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
else {
	header('location:cesta.php');
	}
}
?>