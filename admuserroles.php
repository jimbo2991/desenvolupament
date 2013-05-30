<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
if (!isset($_SESSION['user'])){
header('location:index.php');
}
if (($_SESSION['rol']=='cliente') or ($_SESSION['rol']=='vendedor') or ($_SESSION['rol']=='redactor')){
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
	

		
    <table bgcolor="" border="5" cellpadding="10" cellspacing="10" width="60%">
	<tr>
	<td><a href="admusuarios.php?letra=A">A</a></td>
	<td><a href="admusuarios.php?letra=B">B</a></td>
	<td><a href="admusuarios.php?letra=C">C</a></td>
	<td><a href="admusuarios.php?letra=D">D</a></td>
	<td><a href="admusuarios.php?letra=E">E</a></td>
	<td><a href="admusuarios.php?letra=F">F</a></td>
	<td><a href="admusuarios.php?letra=G">G</a></td>
	<td><a href="admusuarios.php?letra=H">H</a></td>
	<td><a href="admusuarios.php?letra=I">I</a></td>
	<td><a href="admusuarios.php?letra=J">J</a></td>
	<td><a href="admusuarios.php?letra=K">K</a></td>
	<td><a href="admusuarios.php?letra=L">L</a></td>
	<td><a href="admusuarios.php?letra=M">M</a></td>
	<td><a href="admusuarios.php?letra=N">N</a></td>
	<td><a href="admusuarios.php?letra=O">O</a></td>
	<td><a href="admusuarios.php?letra=P">P</a></td>
	<td><a href="admusuarios.php?letra=Q">Q</a></td>
	<td><a href="admusuarios.php?letra=R">R</a></td>
	<td><a href="admusuarios.php?letra=S">S</a></td>
	<td><a href="admusuarios.php?letra=T">T</a></td>
	<td><a href="admusuarios.php?letra=U">U</a></td>
	<td><a href="admusuarios.php?letra=V">V</a></td>
	<td><a href="admusuarios.php?letra=W">W</a></td>
	<td><a href="admusuarios.php?letra=X">X</a></td>
	<td><a href="admusuarios.php?letra=Y">Y</a></td>
	<td><a href="admusuarios.php?letra=Z">Z</a></td>
	</tr>
	</table>

			
	<div>

	
	<div id ="contenedor1">	
	<?php
if (isset($_REQUEST['nombre'])){
$letra=$_REQUEST['nombre'];
echo "Roles asignados al usuario ".$letra;
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select rol from registro where id='$letra';");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }

?>
<table bgcolor="" border="5" cellpadding="10" cellspacing="10" width="60%">
<tr>
<td>rol</td><td>accion</td>
</tr>
<?
while ($row=mysqli_fetch_row($result)) {

?>
<tr>
<td><?echo $row[0];?></td>
<td><width='20%'><form action='admrevocarrol.php' method='post'><input type='hidden' name='nombre' value='<?echo $letra;?>'><input type='hidden' name='rol' value='<?echo $row[0];?>'><input type='submit' value='borrar rol'></form></td>
</tr>
<?
}
?>
</table>
<form action='admasigrol.php' method='post'>
<input type='hidden' name='nombre' value='<?php echo $letra?>'>
<select name='rol'>
<option>vendedor</option>
<option>redactor</option>
<option>administrador</option>
<option>cliente</option>
<input type='submit' value='asignar rol'></form>


<?
mysqli_free_result($result);
mysqli_close($link);
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
