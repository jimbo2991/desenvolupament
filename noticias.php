<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers</title>
	<link rel="stylesheet" href="css/noticias.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />

</head>


<body>

		
	 <div id="contenedor">
		 <div id="cabecera">
		<div id="logo">
			<img src='imagenes/logo.png' width='400px' height='100px'>
	  </div>
	  
	  <div id="busqueda">
		<?php
		if (isset($_SESSION['user'])) {
		echo "</br></br><table><tr><td><img src='imagenes/foto_usuario.png'></td>";
		  echo "<td>ha iniciado sesion como: ".$_SESSION['user'];
		  echo "</br> con el rol: " .$_SESSION['rol'];
		  ?>
		  <br/><a href="logout.php"><input type="button" value="cerrar sesion"></a></td>
		  </tr>
		  </table>
		  <?
		  }
		  else {
		?>
		<form method="post" name="login" action="login.php">
			 </br></br><table><tr><td><img src='imagenes/foto_usuario.png'></td>
			<td><input type="name" name="usuario" value="Usuario..."></br>
			<select name="rol">
					<option selected value>seleccione rol</option>
					<option>cliente</option>
					<option>vendedor</option>
					<option>redactor</option>
					<option>administrador</option>
			</select>
			</br><input type="password" name="pass" ></br>
			</br><a href='nuevousuario.php'><input type="button" value="Registro"></a>
			<input type="submit" value="Acceder" name="acceder"></td>
			</table>
		  </form>
		  <?
		  }
		  ?>
	</div>
	
	<div class="relleno"></div>
	</div>
	
	<div id="nav">

	 <a href="index.php"><li>Portada</li></a>
	 <a href="noticias.php"><li>Noticias</li></a>
	 <a href="tiendaps3.php"><li>PS3</li></a>
	 <a href="tiendaxbox.php"><li>XBOX 360</li></a>
	 <a href="tiendawii.php"><li>WII U</li></a>
	 <a href="tiendapc.php"><li>PC</li></a>
	  
	 <li>Foro</li>
	 <a href="galeriavideos.php"><li>Galer&iacutea de v&iacutedeos</li></a>
	 <?
	 if (isset($_SESSION['rol'])){
	  if ($_SESSION['rol']=="redactor"){
		echo "<a href='newnoticia.php'><li>Redactar Noticia</li></a>";
		}
	  if ($_SESSION['rol']=="administrador"){
	  	echo "<a href='newnoticia.php'><li>Redactar Noticia</li></a>";
		echo "<a href='newproducto.php'><li>Vender videojuego</li></a>";
		echo "<a href='admin.php'><li>Administrar p&aacute;gina</li></a>";
		} 
	  if ($_SESSION['rol']=="vendedor"){
	  echo "<a href='newproducto.php'><li>Vender videojuego</li></a>";
	  }
	}
	?>
	 <div class="relleno"></div>
	</div>
	
	<div id ="contenedor1">	
		<?php
header('Content-Type: text/html; charset=ISO-8859-1');
$query="select codigo_noticia, titulo, contenido, foto, fecha, hora_publicacion, codigo_redactor from noticia order by codigo_noticia desc ";
if (isset($_GET['pagina'])){
	if ($_GET['pagina']>=2){
		$pagina= ($_GET['pagina']-1)*3;
		$query.="limit $pagina,3";
	}
	if ($_GET['pagina']<2){
		$query.="limit 0,3";
	}
}
else {
$query.="limit 0,3";
}
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,$query);
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
$numero = mysqli_num_rows($result);
while ($row=mysqli_fetch_row($result)) {

?>
<div id="titulos"><?php print $row[1]?></b></br>
	<p>por <?php print $row[6]?>, el <?php print $row[4]?> a las <?php print $row[5]?>.</p>
</div>
<img src="<?php print $row[3]?>" width="580" height="326">
<br><br>
<p><?php print $row[2]?></p>
<br>
<a href="articulo.php?noticia=<?php print $row[0]?>">Seguir leyendo...</a>
<hr>

<?php
}
mysqli_free_result($result);
mysqli_close($link); 
?>
    
			<div class="relleno"></div>
			</div>
			
	<div>

	
	<div id ="contenedor2">	
	<?
	if (isset($_GET['pagina'])){
		if ($_GET['pagina']>=2){
			if ($numero<3){
				echo "<a href='noticias.php?pagina=".($_GET['pagina']-1)."'>Noticias mas recientes</a></br></br>";
				echo "Noticias mas antiguas</br></br>";
				}
			else {
				echo "<a href='noticias.php?pagina=".($_GET['pagina']-1)."'>Noticias mas recientes</a></br></br>";
				echo "<a href='noticias.php?pagina=".($_GET['pagina']+1)."'>Noticias mas antiguas</a></br></br>";
			}
		}
		if ($_GET['pagina']<2){
			echo "Noticias mas recientes</a></br></br>";
			echo "<a href='noticias.php?pagina=".($_GET['pagina']+1)."'>Noticias mas antiguas</a></br></br>";
		}
		
	}
	else {
		echo "Noticias mas recientes</a></br></br>";
		echo "<a href='noticias.php?pagina=2'>Noticias mas antiguas</a></br></br>";
	}
	?>
	<br>
			<div class="relleno"></div>
			</div>
	<div>
	
	
	
	

	
	<div id="pie">
	<div id="legal">
		
			<a href="quien.php">Quienes somos?</a> | <a href="contacto.php">Contacta con nosotros</a> | <a href="informacion.php">Informaci&oacute;n</a>
		
	</div>
	</div>
		
		<div class="relleno"></div>
		</div>
		
	</div>
	
</div>
	

</body>

</html>
