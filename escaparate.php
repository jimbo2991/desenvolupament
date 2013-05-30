<html> 
<head>
<title>DKgamers</title>
</head>
<body>
<!--<div id="escaparate">
		
		<div id="contenedorj">-->
		<table bgcolor="" border="4" cellpadding="0" cellspacing="0" width="60%">
<?php
header('Content-Type: text/html; charset=ISO-8859-1');

$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select vi.codigo_videojuego,vi.titulo,vi.plataforma,vi.precio,vi.descripcion,vi.foto, ve.codigo_V, avg(va.valoracion) from videojuego vi, vende ve, valora va where vi.codigo_videojuego=ve.codigo_videojuego_V and ve.codigo_videojuego_V=va.codigo_videojuego_R group by vi.codigo_videojuego");
//$result=mysqli_query($link,"select vi.codigo_videojuego,vi.titulo,vi.plataforma,vi.precio,vi.descripcion,vi.foto from videojuego vi limit 0,3");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
while ($row=mysqli_fetch_row($result)) {

?>
<tr><td><img src="<?php print $row[5]?>" align="center" width="245px" height="300px"></td>
		<td>
			<b style="color:purple; font-size:25px;"><?php print $row[1]?></b></br></br>
			<b>Precio:</b> <?php print $row[3]?> &nbsp; €</br>
			<b>Plataforma:</b> <?php print $row[2]?></br>
			<b>Vendedor:</b> <?php print $row[6]?></br>
			<b>Valoración vendedor:<?php print $row[7]?></b></br>
			<b>Descripción:</b></br><?php print $row[4]?></b></td>
			<td><a href="cesta.php?add=<?php print $row[0]?>"><input type="button" value="Comprar"></a>
		</td>
		</tr>
			

<?php

}
mysqli_free_result($result);
mysqli_close($link); 
?><!--
<div class="relleno"></div>
</div>-->
</table>
</body>
</html>