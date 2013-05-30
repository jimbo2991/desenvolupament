<html> 
<head>
<title>DKgamers</title>
<link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
$contador=1;
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select titulo, precio, foto from videojuego order by fecha_venta asc limit 0,6");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
while ($row=mysqli_fetch_row($result)) {

?>
<div id="nproducto<?print $contador?>">
				
				<center><img src="<?php print $row[2]?>" width="90px" height="110px"></center>
				<b class="nombrejuegoclase"><?php print substr($row[0],0,15)?></b></br>
				<hr>
				<b class="preciojuegoclase"><?php print $row[1]?>&euro;</b>
				
			</div>
			
			

<?php
$contador=$contador+1;
}
mysqli_free_result($result);
mysqli_close($link); 
?>

</body>
</html>
