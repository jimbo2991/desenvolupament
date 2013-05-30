<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
if (!isset($_SESSION['user'])){
header('location:index.php');
}
if (($_SESSION['rol']=='cliente') or ($_SESSION['rol']=='redactor')){
header('location:index.php');
}
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
	<script type="text/javascript" src="js/nicEdit.js"></script>
	<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	</script>
	<p>Añadir un nuevo producto</p>
	<form method="post" action="publicaproducto.php" enctype="multipart/form-data">
		<h1>Titulo:</h1>
		<textarea name="titulo" style="width: 100%"></textarea>
		<? if (isset($_SESSION['errtitulo'])){
		echo $_SESSION['errtitulo'];
		session_unset($_SESSION['errtitulo']);}
		?>
		<br />
		<h1>Compañia:</h1>
		<textarea name="compania" style="width: 100%"></textarea>
		<? if (isset($_SESSION['errcompania'])){
		echo $_SESSION['errcompania'];
		session_unset($_SESSION['errcompania']);}
		?>
		<br />
		<h1>Plataforma:</h1>
		<select name="plataforma">
		<option>PS3</option>
		<option>XBOX</option>
		<option>WII</option>
		<option>PC</option>
		</select>
		<br />
		<h1>Precio:</h1>
		<textarea name="precio" style="width: 100%"></textarea>
		<? if (isset($_SESSION['errprecio'])){
		echo $_SESSION['errprecio'];
		session_unset($_SESSION['errprecio']);}
		?>
		<br />
		<h1>Descripcion:</h1>
		<textarea name="descripcion" style="width: 100%"></textarea>
		<? if (isset($_SESSION['errdescripcion'])){
		echo $_SESSION['errdescripcion'];
		session_unset($_SESSION['errdescripcion']);}
		?>
		<br />
		<h1>Genero:</h1>
		<select name="genero">
		<option>Deportes</option>
		<option>Conduccion</option>
		<option>Simulacion</option>
		<option>Multiplataforma</option>
		<option>Lucha</option>
		<option>Disparos</option>
		<option>Aventura</option>
		<option>Acción</option>
		</select>
		 <label for="archivo"><h1>Foto (formato:pjpeg|jpeg|gif|png tamaño maximo:1024*1024)</h1></label>
  <input type="file" name="archivo" id="archivo" />
  <? if (isset($_SESSION['errorfoto'])){
		echo $_SESSION['errorfoto'];
		session_unset($_SESSION['errorfoto']);}
		?>
		<br />
		<h1>Valoracion:</h1>
		<select name="valoracion">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</select>
		<input type="checkbox" name="terminos" value="1">Acepto las <a href="javascript:window.open('normas.php')">normas de la comunidad</a>
		<br />
		<input type="submit" value="enviar">
	</form>
	
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
