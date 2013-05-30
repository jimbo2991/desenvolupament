<body>
<?php 
session_start(); 
if ( isset ( $_SESSION['user'] ) ) {
  echo "ha iniciado sesion como: ".$_SESSION['user']." con el rol " .$_SESSION['rol'];
session_unset();
session_destroy();
echo "<br>sesion cerrada satisfactoriamente. sera enviado de nuevo a la pagina de login\n";
?>
<br>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://192.168.12.207"> 
si no es redirigido automaticamente,
<a href="http://192.168.12.207"><b>pulse aqui</b></a><?
} else {
  echo "sesion no valida";?>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://192.168.12.207"> 
<br>si no es redirigido automaticamente,
<a href="http://192.168.12.207"><b>pulse aqui</b></a><?
}
?>