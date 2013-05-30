<?php
session_start();
$acceso=true;
$concurso= $_GET['concurso'];
$usuario= $_SESSION['user'];
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select codigo_concurso_C,codigo_C from participa where codigo_concurso_C='$concurso' and codigo_C='$usuario'");
if (!$result){
die('error de conexion. '.$er);
}

$numero = mysqli_num_rows($result);

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers</title>
	<link href="css/articulo.css" rel="stylesheet">
	
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
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
	require('controlconcurso.php');
	if ($acceso==true){
		if (!isset($_SESSION['user'])) {
		  echo "debes iniciar sesion para poder participar";
		  ?>
		  <form method="post" name="login" action="login.php">
			 </br></br><table><tr>
			<td>usuario:</td><td><input type="name" name="usuario" value="Usuario..."></td>
			</tr><tr>
			<td>rol:</td><td><select name="rol">
					<option selected value>seleccione rol</option>
					<option>cliente</option>
					<option>vendedor</option>
					<option>redactor</option>
					<option>administrador</option>
			</select></td>
			</tr><tr>
			<td>contraseña:</td><td><input type="password" name="pass" value="Contraseña..."></td>
			</tr><tr>
			<td><a href='nuevousuario.php'><input type="button" value="registro"></a>
			<input type="submit" value="Acceder" name="acceder"></td>
			</tr>
			</table>
		  </form>
		  <?
		  }
		  else if ($numero==1){
		  echo "ya has participado en este concurso";
		  }
		  else {
		  require('preguntasconcurso.php');
		  }
		  }
		else{
		echo "usted no puede participar en el concurso";}
		
		  ?>
    
			<div class="relleno"></div>
			</div>
			
	<div>
	
	<div id ="nuevosproductos">	
	Nuevos productos
	<div class="relleno"></div>
	<?require('nuevoproductoindex.php');?>
	</div>
			
	
	
	
	<!--<div id ="contenedor2">	
	
			<div class="relleno"></div>
			</div>
	</div>
		
	<div id ="banner_concurso">	
	Concurso</br>
	<center><a href="concurso.php"><img src="imagenes/fotoconcurso.jpg" width="60%"></a></center>
			<div class="relleno"></div>
			</div>
			
	<div>
	-->
	
	<div id ="contenedor3">	
		
		<div id="izq">
		<?require('noticiaizq.php');?>
			<!--<h2>Primera imagen de lo que seria el Battlelog de Battlefield 4</h2>
			
			<img src="imagenes/battlefield4.jpg" width="95%">
		DICE ha mostrado en Twitter la primera imagen de lo que sería el renovado Battlelog para Battlefield 4. Recordamos que el Battlelog es la web desde donde nos uniremos a las diferentes partidas y veremos nuestras estadísticas de batalla.
		Por el momento no se puede sacar nada en claro de la imagen, pero los rumores previos indican que Battlelog 2.0 contaría con un mayor número de opciones sociales y un seguimiento de las estadísticas más profundo.-->
		</div>
		

	
		<div id="cent">
		<?require('noticiacent.php');?>
			<!--<h2>Primeros detalles oficiales de FIFA 14</h2>
			
			<img src="imagenes/fifa14.jpg" width="95%">
			
			Electronic Arts ha mostrado los primeros detalles de FIFA 14, durante una presentación a puerta cerrada en el estadio Santiago Bernabéu.
Como primera novedad, los desarrolladores, han comentado que el aspecto visual no se tocará en excesividad, quizás si haya un pequeño cambio, pero se centrarán más en pulir detalles de las anteriores versiones y sobretodo hacer que el juego sea mas creativo y pueda ser divertido para un hipotetico espectador mientras jugamos.
La defensa táctica continuará como hasta ahora, ya que le da un impresionante realismo.-->

			
		</div>
		

	
		<div id="drch">
		<?require('noticiadrch.php');?>
			<!--<h2>Primeros detalles oficiales de FIFA 14</h2>
			
			<img src="imagenes/fotops4.jpg" width="95%">
			
			Andrew House, presidente de Sony Entertainment, ha anuncio en el diario británico The 
			Sun que la nueva consola de su compañía llegará en Octubre de este mismo año. 
			Para hacerlo ha comentado lo siguiente: “La consola, que llegará en Octubre, contará con una serie de características y funcionalidades que la harán más atractiva para todo tipo de público” Por el momento se desconoce si este lanzamiento se hará a nivel mundial o si se está refiriendo a una región en concreto.-->
	    </div>

	<div class="relleno"></div>
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
