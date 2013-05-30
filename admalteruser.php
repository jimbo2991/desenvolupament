<?
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
function comprobar_nif($nif){
   $letras = explode(',','T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E');
   if (
      (strlen($nif)!=9) ||
      (!is_long($entero=intval(substr($nif,0,8)))) ||
      (!in_array($letra=strtoupper(substr($nif,8,1)),$letras)) ||
      ($letra!=$letras[$entero%23])
      ){
         return false;
      }else{
         return true;
      }
}
function verificaremail($email){ 
  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
      return FALSE; 
  } else { 
       return TRUE; 
  } 
}
function validar($numeros){
$numeros=preg_replace("/[^0-9]/","",$numeros);//quitamos la basura
$primer_nuemro=substr($numeros,0,1); // muy obio el promer digito
$total=strlen($numeros);// el total de digitos
if(($primer_nuemro==9 || $primer_nuemro==6) && $total==9){ // la validacion tambien obvia
return true;
}else{
    return false;
    }
}
?>
<html>
<head>
<title>DKgamers</title>
</head>
<body>
<center>
<?php
// Cambie el Origen & Destino de Base de Datos
$id=$_REQUEST['id'];
$valido=true;
if ($_REQUEST['id']==""){
	$_SESSION['errid']="escriba su identificacion de usuario";
	$valido=false;
	}
if ($_REQUEST['nif']==""){
	$_SESSION['errnif']="escriba su DNI";
	$valido=false;
	}
if (!comprobar_nif($_REQUEST['nif'])){
	$_SESSION['errnif']="el DNI no es correcto";
	$valido=false;
	}
if ($_REQUEST['nombre']==""){
	$_SESSION['errnombre']="escriba su nombre";
	$valido=false;
	}
if ($_REQUEST['apellido']==""){
	$_SESSION['errapellido']="escriba su apellido";
	$valido=false;
	}
if ($_REQUEST['email']==""){
	$_SESSION['erremail']="escriba su email";
	$valido=false;
	}
if (!verificaremail($_REQUEST['email'])){
	$_SESSION['erremail']="el email no es correcto";
	$valido=false;
	}
if ($_REQUEST['telefono']==""){
	$_SESSION['errtelefono']="escriba su telefono";
	$valido=false;
	}
if (!validar($_REQUEST['telefono'])){
	$_SESSION['errtelefono']="solo se admiten numeros de telefono de España";
	$valido=false;
	}
if ($_REQUEST['direccion']=="") {
	$_SESSION['errdireccion']="escriba su direccion";
	$valido=false;
	}



if ($valido!=true){	
	header('location:admmoduser.php?nombre='.$id);
	}
else {
	

$nif=$_REQUEST['nif'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
$direccion=$_REQUEST['direccion'];
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");

$result=mysqli_query($link,"UPDATE usuario SET nif = '$nif', nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono', direccion = '$direccion' WHERE id = '$id';");
if (!$result){
	die("la consulta no se ha ejecutado".mysqli_error($link));
}
else {
	header('location:admusuarios.php');
	}
}
?>