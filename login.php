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
$_SESSION['error']="el usuario no existe";
header('location:formulariologin.php');
}
while ($row=mysqli_fetch_row($result)) {

if (($row[0]==$user)&&($row[2]==$pass)) {
$_SESSION["user"] = $user;   
$_SESSION["rol"] = $rol;
header('location:index.php');
}
else
{
$_SESSION['error']="el usuario y/o la contraseña son incorrectos";
header('location:formulariologin.php');
}
}
mysqli_free_result($result);
mysqli_close($link);
?>

</body>
</html>