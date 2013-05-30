<html> 
<head>
<title>DKgamers</title>
</head>
<body>
<?php
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select * from concurso order by fecha_hora_publicacion desc limit 0,1");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
?>
<div id="contenedorconcurso">


<?
while ($row=mysqli_fetch_row($result)) {
?>

<div id="nombrec"><?php print $row[1]?></div>
<div id="fotoc"><img src="<?php print $row[2]?>" width="250" height="250"></div>
<div id="fechac">Fecha/Hora fin: <?php print $row[3]?></div>
<div id="ganadorc">Ganador: <?php print $row[4]?></div>
<div id="participarr"><a href="concursoactivo.php?concurso=<?php print $row[0]?>"><input type="button" name="concurso" value="Participar"></a></div>

<?php
}

mysqli_free_result($result);
mysqli_close($link); 
?>

</body>
</html>
