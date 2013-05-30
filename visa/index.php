<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>Layout Basico</title>
	<link href="css/portada.css" rel="stylesheet">
</head>

<body>
	<BACKGROUND="imagenes/fondo.png">
	 <div id="contenedor">
		 <div id="cabecera">
		<div id="logo">
			<img src='imagenes/logo.png' width='400px' height='100px'>
	  </div>
	  
	  <div id="busqueda">
		
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
			</br><input type="password" name="pass" value="Contraseña..."></br>
			</br><a href='nuevousuario.php'><input type="button" value="registro"></a>
			<input type="submit" value="Acceder" name="acceder"></td>
			</table>
		  </form>
		<?
		
		?>
		<?php
		if (isset($_SESSION['user'])) {
		  echo "ha iniciado sesion como: ".$_SESSION['user']." con el rol " .$_SESSION['rol'];
		  ?>
		  <a href="logout.php"><b>cerrar sesion</b></a>
		  <?
		  }
		  
		?>
	</div>
	
	<div class="relleno"></div>
	</div>
	
	<div id="nav">

	 <li>Portada</li>
	 <li>Noticias</li>
	 <li>PS3</li>
	 <li>XBOX 360</li>
	 <li>WII U</li>
	 <li>PC</li>
	 <li>Tienda</li>
	 <li>Análisis</li>
	 <li>Foro</li>
	 <li>Galeria de videos</li>
	 
	 <div class="relleno"></div>
	</div>
	
	<div id ="contenedorj">	
		
		<div id="izq">
			Titulo 1
		
		</div>
		

	
		<div id="cent">
			Titulo 2
		
		</div>
		

	
		<div id="drch">
			Titulo 3
	    
	    </div>

	<div class="relleno"></div>
	</div>
	
	<div id="pie">
		<div id="legal">
			
			Info legal &copy;
		
		</div>
		</div>
		
		<div class="relleno"></div>
		</div>
		
	</div>
	</div>
	

</body>

</html>
