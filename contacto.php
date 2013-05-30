<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers</title>
	
	<link href="css/secciones.css" rel="stylesheet">
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
	
	<div id ="contenido">
		Estamos situados en el C/ Torrent del Batlle 10, Terrassa
		<div class="salto"></div>
		
		<iframe width="425" height="350" frameborder="0" scrolling="no"
		marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Carrer+de+Torrent+del+Batlle+10,+Terrassa&amp;aq=&amp;sll=41.569401,1.996485&amp;sspn=0.011125,0.022724&amp;t=h&amp;g=Carrer+de+Torrent+del+Batlle,+Terrassa&amp;ie=UTF8&amp;hq=&amp;hnear=Carrer+de+Torrent+del+Batlle,+10,+08225+Terrassa,+Barcelona&amp;ll=41.569401,1.996486&amp;spn=0.001391,0.00284&amp;z=14&amp;output=embed">
		</iframe><br /><small>
		<a href="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Carrer+de+Torrent+del+Batlle+10,+Terrassa&amp;aq=&amp;sll=41.569401,1.996485&amp;sspn=0.011125,0.022724&amp;t=h&amp;g=Carrer+de+Torrent+del+Batlle,+Terrassa&amp;ie=UTF8&amp;hq=&amp;hnear=Carrer+de+Torrent+del+Batlle,+10,+08225+Terrassa,+Barcelona&amp;ll=41.569401,1.996486&amp;spn=0.001391,0.00284&amp;z=14" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
		
		<div class="salto"></div>
		
		<div class="textleft">
		Para qualquier duda, puede contactar con:<div class="salto"></div>
		<b><u>Javier Calleja:</b></u> javierk544356@hotmail.com<div class="salto"></div>
		<b><u>Alejandro Mart&iacute;n:</b></u> amartinlopez1@gmail.com
		</div>
	</div

	
	<div class="relleno"></div>
	</div>
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

