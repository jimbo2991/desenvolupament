<html> 
<head>
<title>DKgamers</title>
</head>
<body>
<?php
session_start();
$user=$_REQUEST['usuario'];
$rol=$_REQUEST['rol'];
$pass=$_REQUEST['pass'];
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select * from registro where id='$user' and rol='$rol'");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
$prueba=mysqli_num_rows($result);
if ($prueba==0) {
echo "<center><br>acceso denegado";
?><META HTTP-EQUIV="REFRESH" CONTENT="5;URL=index.php"><?
}
while ($row=mysqli_fetch_row($result)) {

if (($row[0]==$user)&&($row[2]==$pass)) {
echo "<center><br>acceso concedido. Bienvenido";
$_SESSION["user"] = $user;   
$_SESSION["rol"] = $rol;
?><META HTTP-EQUIV="REFRESH" CONTENT="5;URL=index.php"><?
}
else
{
echo "<center><br>acceso denegado";
?><META HTTP-EQUIV="REFRESH" CONTENT="5;URL=index.php"><?
}
}
mysqli_free_result($result);
mysqli_close($link);
?>

</body>
</html>