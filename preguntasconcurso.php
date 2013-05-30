<html> 
<head>
<title>DKgamers</title>
<script type="text/javascript" src="js/contador.js"></script>
</head>
<body>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
$concurso= $_GET['concurso'];
$_SESSION['concurso']=$concurso;
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select * from preguntas_concurso where codigo_concurso='$concurso'");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
?>
<form name="concurso" method="post" action="validar.php">

<?
while ($row=mysqli_fetch_row($result)) {

?>
<h1><?php print $row[1]?></h1></br>
<input type="radio" name="respuesta" value="<?php print $row[2]?>"><?php print $row[2]?></br>
<input type="radio" name="respuesta" value="<?php print $row[3]?>"><?php print $row[3]?></br>
<input type="radio" name="respuesta" value="<?php print $row[4]?>"><?php print $row[4]?></br>
<input type="radio" name="respuesta" value="<?php print $row[5]?>"><?php print $row[5]?></br>
<input type="radio" name="respuesta" value="<?php print $row[6]?>"><?php print $row[6]?></br>
<input type="radio" name="respuesta" value="<?php print $row[7]?>"><?php print $row[7]?></br>
<input type="radio" name="respuesta" value="<?php print $row[8]?>"><?php print $row[8]?></br>
<input type="radio" name="respuesta" value="<?php print $row[9]?>"><?php print $row[9]?></br>
<input type="radio" name="respuesta" value="<?php print $row[10]?>"><?php print $row[10]?></br>
<input type="radio" name="respuesta" value="<?php print $row[11]?>"><?php print $row[11]?></br>
<input type="hidden" name="respuesta_correcta" value="<?php print $row[12]?>"></br>

<?php
}
?>
<input type="hidden" name="contador" size="2" readonly maxlength="2">
<input type="submit" value="Responder">
<?
mysqli_free_result($result);
mysqli_close($link); 
?>

</body>
</html>