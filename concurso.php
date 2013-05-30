<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>Concurso</title>
	
	<link href="css/concurso.css" rel="stylesheet">
</head>


<body bgcolor="blue">

		
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
	

	<?require('listaconcursos.php');?>
    
	<div class="relleno"></div>
	</div>
			

	
	
	
	<div id ="nuevosproductosc">	
	<b>Nuevos productos</b>
	<div class="relleno"></div>
	<?require('nuevoproductoindex.php');?>
			</div>
			
	<div>
	
	

	
<div id ="contenedor3">	
		
		<div id="izq">
		<html>
<head>
<title>DKgamers</title>
</head>
<body>
<h2>Primera imagen de lo que seria el Battlelog de Battlefield 4</h2>
<h1></h1></br>
<p>por KingJames, el 2013-04-25 a las 12:35:00.</p>
<img src="imagenes/battlefield4.jpg" width="95%">
<br><br>
<p>DICE ha mostrado en Twitter la primera imagen de lo que sería el renovado Battlelog para Battlefield 4</p>
<br><br><a href="articulo.php?noticia=236">Seguir leyendo...</a>


</body>
</html>			<!--<h2>Primera imagen de lo que seria el Battlelog de Battlefield 4</h2>
			
			<img src="imagenes/battlefield4.jpg" width="95%">
		DICE ha mostrado en Twitter la primera imagen de lo que serÃ­a el renovado Battlelog para Battlefield 4. Recordamos que el Battlelog es la web desde donde nos uniremos a las diferentes partidas y veremos nuestras estadÃ­sticas de batalla.
		Por el momento no se puede sacar nada en claro de la imagen, pero los rumores previos indican que Battlelog 2.0 contarÃ­a con un mayor nÃºmero de opciones sociales y un seguimiento de las estadÃ­sticas mÃ¡s profundo.-->
		</div>
		

	
		<div id="cent">
		<html>
<head>
<title>DKgamers</title>
</head>
<body>
<h2>Primeros detalles oficiales de FIFA 14</h2>
<h1></h1></br>
<p>por KingJames, el 2013-04-25 a las 12:39:00.</p>
<img src="imagenes/fifa14.jpg" width="95%">
<br><br>
<p>Electronic Arts ha mostrado los primeros detalles de FIFA 14, durante una presentación a puerta cerrada en el estadio Santiago Bernabéu</p>
<br><br><a href="articulo.php?noticia=237">Seguir leyendo...</a>


</body>
</html>			<!--<h2>Primeros detalles oficiales de FIFA 14</h2>
			
			<img src="imagenes/fifa14.jpg" width="95%">
			
			Electronic Arts ha mostrado los primeros detalles de FIFA 14, durante una presentaciÃ³n a puerta cerrada en el estadio Santiago BernabÃ©u.
Como primera novedad, los desarrolladores, han comentado que el aspecto visual no se tocarÃ¡ en excesividad, quizÃ¡s si haya un pequeÃ±o cambio, pero se centrarÃ¡n mÃ¡s en pulir detalles de las anteriores versiones y sobretodo hacer que el juego sea mas creativo y pueda ser divertido para un hipotetico espectador mientras jugamos.
La defensa tÃ¡ctica continuarÃ¡ como hasta ahora, ya que le da un impresionante realismo.-->

			
		</div>
		

	
		<div id="drch">
		<html>
<head>
<title>DKgamers</title>
</head>
<body>
<h2>Primeras noticia PS4</h2>
<h1></h1></br>
<p>por KingJames, el 2013-04-25 a las 12:41:00.</p>
<img src="imagenes/fotops4.jpg" width="95%">
<br><br>
<p>Andrew House, presidente de Sony Entertainment, ha anuncio en el diario británico The Sun que la nueva consola de su compañía llegará en Octubre de este mismo año</p>
<br><br><a href="articulo.php?noticia=238">Seguir leyendo...</a>


</body>
</html>			<!--<h2>Primeros detalles oficiales de FIFA 14</h2>
			
			<img src="imagenes/fotops4.jpg" width="95%">
			
			Andrew House, presidente de Sony Entertainment, ha anuncio en el diario britÃ¡nico The 
			Sun que la nueva consola de su compaÃ±Ã­a llegarÃ¡ en Octubre de este mismo aÃ±o. 
			Para hacerlo ha comentado lo siguiente: â€œLa consola, que llegarÃ¡ en Octubre, contarÃ¡ con una serie de caracterÃ­sticas y funcionalidades que la harÃ¡n mÃ¡s atractiva para todo tipo de pÃºblicoâ€ Por el momento se desconoce si este lanzamiento se harÃ¡ a nivel mundial o si se estÃ¡ refiriendo a una regiÃ³n en concreto.-->
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

