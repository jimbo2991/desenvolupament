<html>
<head>
<title>DKgamers</title>
</head>
<body>
<?php

$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select codigo_noticia, titulo, contenido, foto, fecha, hora_publicacion, codigo_redactor from noticia order by codigo_noticia desc limit 2,1");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
while ($row=mysqli_fetch_row($result)) {

?>
<h2><?php print $row[1]?></h2>
<h1></h1></br>
<p>por <?php print $row[6]?>, el <?php print $row[4]?> a las <?php print $row[5]?>.</p>
<img src="<?php print $row[3]?>" width="95%">
<br><br>
<p><?php print strstr($row[2], '.', true)?></p>
<br><br><a href="articulo.php?noticia=<?php print $row[0]?>">Seguir leyendo...</a>

<?php
}
mysqli_free_result($result);
mysqli_close($link); 
?>

</body>
</html>