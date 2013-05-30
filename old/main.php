<?php 
session_start(); 
if ( isset ( $_SESSION['user'] ) ) {
  echo "ha iniciado sesion como: ".$_SESSION['user']." con el rol " .$_SESSION['rol'];
} else {
  echo "sesion no valida";
  header ("Location: http://192.168.12.207");
}
?>
<html>
<head>
<title>Creepie Air</title>
</head>
<body>
<center>
<!--<form name="funo" method="POST" action="listaop.php">
<select name="opc" onChange='document.funo.submit();'>
<option selected value>seleccione una opcion</option>
<option>1. -aviones</option>
<option>2. -personal</option>
<option>3. -vuelos</option>
<option>4. -pasajeros</option>
<option>5. -facturacion</option>
<option>6. -mantenimiento</option>
</select>
</form>-->
</center>
<a href="http://192.168.12.207/logout.php"><b>cerrar sesion</b></a><hr>
</body>
</html>
