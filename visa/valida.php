<?
session_start();
$numero=$_SESSION['numero'];
$caducidad=$_SESSION['caducidad'];
$numero=$_SESSION['seguridad'];
$titular=$_SESSION['titular'];
$importe=$_SESSION['importe'];
$link=mysqli_connect("localhost","root","dkgamers","visa");
$result=mysqli_query($link,"select num_tarjeta,titular,caducidad,CCV,saldo,valida from clientes where num_tarjeta='$numero'");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
if (mysqli_num_rows($result)==0) {
$_SESSION['visaerror']=1;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}
/*if (isset($_SESSION['visaerror'])){
	if ($_SESSION['visaerror']==1){
	echo "Usted no tiene tarjeta de credito en Visa";
	}
	if ($_SESSION['visaerror']==2){
	echo "Su tarjeta de credito esta anulada o ha caducado";
	}
	if ($_SESSION['visaerror']==3){
	echo "El nombre del titular no coincide con su numero de tarjeta de credito";
	}
	if ($_SESSION['visaerror']==4){
	echo "El codigo de seguridad no es correcto";
	}
	if ($_SESSION['visaerror']==5){
	echo "Su tarjeta de credito no dispone de suficiente saldo para realizar esta operacion";
	}
}*/
while ($row=mysqli_fetch_row($result)) {

if ($row[5]==0){
$_SESSION['visaerror']=2;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}
if ($row[1]!=$titular){
$_SESSION['visaerror']=3;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}
if ($row[3]!=$seguridad){
$_SESSION['visaerror']=4;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}
if ($importe>$row[4]){
$_SESSION['visaerror']=5;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}
if ($caducidad!=$row[2]){
$_SESSION['visaerror']=6;
header('location:http://192.168.12.207/validapago.php?pago=visa');
}

$sql = "UPDATE clientes SET saldo = saldo - '$importe' WHERE num_tarjeta = '$numero';";
$result2=mysqli_query($link,$sql);
$er2=mysqli_error($link);
if($er2!=0){
			die('error de conexion. '.$er2);
               }
if (!$result2){
die('error de conexion. '.$er2);
}
}
mysqli_free_result($result);
mysqli_close($link);
header('location:http://192.168.12.207/confirmacion.php');
?>
</body>
</html>