<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers</title>
	<link rel="stylesheet" href="css/articulo.css" type="text/css" media="screen" />
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
		<?require('verarticulo.php');?>
    
			<div class="relleno"></div>
			</div>
			
	<div>

	
	<div id ="contenedor2">	
	<?php
		if (!isset($_SESSION['user'])) {
		  echo "debes iniciar sesion para poder publicar un comentario";
		  }
		  else {?>
	<script type="text/javascript" src="js/nicEdit.js"></script>
	<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	</script>
	<p>Publicar un comentario en la entrada</p>
	<form method="post" action="publicacomentario.php">
		<textarea name="area1" style="width: 100%"></textarea>
		<br />
		<input type="checkbox" name="terminos" value="1">Acepto las <a href="javascript:window.open('normas.php')">normas de la comunidad</a>
		<br />
		<input type="submit" value="enviar">
	</form>
	<?
	}
	?>
	<br>
			<div class="relleno"></div>
			</div>
	<div>
	
	<div id="comment">
		Comentarios<br>
		<?
		//$noticia= '235';
		$er=0;
		$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
		$result=mysqli_query($link,"select usuario, comentario, fecha from comentarios where codigo_noticia='$noticia'");
		$er=mysqli_error($link);
		if($er!=0){
			die('error de conexion. '.$er);
               }
		if (!$result){
		die('error de conexion. '.$er);
		}
		while ($row=mysqli_fetch_row($result)) {

		?>
		<?php print $row[1]?></b></br>
		<p>por <?php print $row[0]?>, el <?php print $row[2]?>.</p>
		<hr><br>
		

<?php
}
mysqli_free_result($result);
mysqli_close($link); 
?>

	</div>
	
	

	
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
