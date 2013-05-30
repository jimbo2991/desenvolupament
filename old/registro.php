<?
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
$primer_numero=substr($numeros,0,1); // muy obio el promer digito
$total=strlen($numeros);// el total de digitos
if(($primer_numero==9 || $primer_numero==6) && $total==9){ // la validacion tambien obvia
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
<center>
<?php
// Cambie el Origen & Destino de Base de Datos
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
if ($_REQUEST['pass']=="") {
	$_SESSION['errpass']="escriba la contraseña";
	$valido=false;
	}
if ($_REQUEST['pass']!=$_REQUEST['confpass']) {
	$_SESSION['errpass']="las contraseñas no coinciden";
	$valido=false;
	}
if ($_REQUEST['terminos']=="") {
	$_SESSION['errterminos']="debe aceptar los Terminos y Condiciones";
	$valido=false;
	}


if ($valido!=true){	
	header('location:formregistro.php');
	}
else {
	
$id=$_REQUEST['id'];
$nif=$_REQUEST['nif'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
$direccion=$_REQUEST['direccion'];
$pass=$_REQUEST['pass'];
$confpass=$_REQUEST['confpass'];
$terminos=$_REQUEST['terminos'];
$rol=$_REQUEST['rol'];
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"insert into usuario (id,nif,nombre,apellido,email,telefono,direccion) values ('$id','$nif','$nombre','$apellido','$email','$telefono','$direccion');");
$result2=mysqli_query($link,"insert into registro (id,rol,password) values ('$id','$rol','$pass');");
if (!$result){
	die("error en el registro de usuario");
}

else {
mysqli_close($link);
echo "Gracias por registrarte ".$id.". Ya puedes acceder a los contenidos de la web";
}
}
?>
</body>
</html>