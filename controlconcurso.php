<?php
header('Content-Type: text/html; charset=ISO-8859-1');
if (!isset($_SESSION['user'])){
header('location:index.php');
$acceso=true;
}
?>
<?php
$letra=$_SESSION['user'];
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select rol from registro where id='$letra' and rol='redactor';");
$result2=mysqli_query($link,"select rol from registro where id='$letra' and rol='administrador';");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
$prueba=mysqli_num_rows($result);
$prueba2=mysqli_num_rows($result2);
if ($prueba==1 || $prueba2==1){

$acceso=false;
}
?>