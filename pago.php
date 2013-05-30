<?php
session_start();
/*if (!isset($_SESSION['codigo_pedido']){
$_SESSION['codigo_pedido']=time();
}*/
$pedido='1';
$subtotal='0';
//header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers usando GIT</title>
	<link href="css/pago.css" rel="stylesheet">
</head>

<body>
	<BACKGROUND="imagenes/fondo.png">
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
	
	<div id="contenido">
	<div id="izq">
		<table>
			<tr>
				<td><h2>Mi cesta:</h2></td>
				<td><img src="imagenes/cesta.png" width="145" height="76"></td>
			</tr>
		</table>
		
		<table>
			<form action="" method="POST">

				<tr>
					<td><span></span>Productos totales: </td>
					<?if (!isset( $_SESSION['productos'])){
					?>
					<td><input type="text" name="productos_totales" size="10" readonly value="0"/></td>
					<?
					}
					else
					{
					?>
					<td><input type="text" name="productos_totales" size="10" readonly value="<?php echo $_SESSION['productos']?>"/></td>
					<?
					}
					?>
				</tr>
				
				<tr>
					<td><span></span>Precio total: </td>
					<?if (!isset( $_SESSION['total'])){
					?>
					<td><input type="text" name="precio_total" size="10" readonly value="0"/></td>
					<?
					}
					else
					{
					?>
					<td><input type="text" name="precio_total" size="10" readonly value="<?php echo $_SESSION['total']?>"/></td>
					<?
					}
					?>
				</tr>

		     	<tr>
		     		
		     		</br></br><td><a href="cesta.php"><input type="button" name="botoncesta" value="ACCEDER A MI CESTA" /></a>
		     	</tr>
			</form>
	
		</table>
	</div>
		
	</div>
<div id="cent">

		<table>
			<tr>
				<td><h2>Filtro de búsqueda:</h2></td>

			</tr>
		</table>
		
		<table>
			<form action="buscatienda.php" method="POST">

				<tr>
					<td><span></span><b>Plataforma:</b> </td>
					<td><span></span><center><b>Precio:</b></center> </td>
					<td><span></span><b>Género:</b> </td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="cps3" size="10"/>PS3</td>
					<td>Precio mayor a <input type="text" name="precio_m" size="10"/>€</td>
					<td><select name="rol">
						<option selected value></option>
						<option>ROL</option>
						<option>Acción</option>
						<option>Multiplataforma</option>
						<option>Deportes</option>
						<option>Conducción</option>
						<option>Simulación</option>
					</select></td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="cxbox" size="10"/>360</td>
					<td>Precio menor a <input type="text" name="precio_me" size="10"/>€</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="cpc" size="10"/>PC</td>
					<td>Precio igual a &nbsp; <input type="text" name="precio_i" size="10"/>€</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="cwii" size="10"/>Wii U</td>
					<td><input type="hidden" name="escondio1"  />
					<td><input type="submit" name="botonfiltro" value="Buscar" />
				</tr>
				
			</form>
	
		</table>
	</div>
		
	</div>
	
		<div id="drch">
	    <center><a href="http://www.vueling.com"><img src='imagenes/banner.png'></a></center>
	    
	    </div>
	
	</div>
	<div class="relleno"></div>
	</div>
	
	<div id="escaparate">
		
		<div id="contenedorj">
		<?if (isset($_SESSION['user'])) {
		if ((!isset($_SESSION['productos'])) || $_SESSION['productos']==0){
		echo "su cesta esta vacia";
		} else {
		?>
<form action="validapago.php" method="post">
<table bgcolor="" border="5" cellpadding="10" cellspacing="10" width="60%">
<tr>
<td><img src="imagenes/paypal-pagos-tiendas-fisicas.jpeg" width="100%"></td><td>Pague de forma segura a traves de su cuenta de Paypal</td><td><input type="radio" name="pago" value="paypal" checked></td>
</tr><tr>
<td><img src="imagenes/visa.jpg" width="100%"></td><td>Pague de forma segura usando su tarjeta Visa</td><td><input type="radio" name="pago" value="visa"></td>
</tr><tr>
<td><img src="imagenes/AmericanExpress_LOGO.png" width="100%"></td><td>Pague de forma segura usando su tarjeta American Express</td><td><input type="radio" name="pago" value="aexpress"></td>
</tr><tr>
<td><img src="imagenes/advertising-s1.gif" width="100%"></td><td>Pague directamente al transportista al recibir su pedido</td><td><input type="radio" name="pago" value="efectivo"></td>
</tr>
</table>
<?
?>
<input type="submit" value="validar pago"></a>
<?}
}
else {
echo 'debe iniciar sesion para poder comprar';
}
?>
	</div>
	
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
