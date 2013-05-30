<?php
session_start();
if (!isset($_SESSION['codigo_pedido'])){
$_SESSION['codigo_pedido']=time();
//$pedido=$_SESSION['codigo_pedido'];
echo '<br>'.$pedido.'</br>';
}
$pedido=$_SESSION['codigo_pedido'];/*
$_SESSION['codigo_pedido']=1;*/
$subtotal='0';
//header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>DKgamers</title>
	<link href="css/tienda.css" rel="stylesheet">
	<script>
	function actualizacesta(a,b){
	
	document.cesta.productos_totales.value=a;
	document.cesta.precio_total.value=b;
	
	}
	</script>
	
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
	
	<div id="contenido">
	<div id="izq">
		<table>
			<tr>
				<td><h2>Mi cesta:</h2></td>
				<td><img src="imagenes/cesta.png" width="145" height="76"></td>
			</tr>
		</table>
		
		<table>
			<form action="" name="cesta" method="POST">

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
		
			<table bgcolor="" border="4" cellpadding="0" cellspacing="0" width="60%">
<?php
if (isset($_SESSION['user'])){
if (isset($_REQUEST['add'])){
require('anadirproductocesta.php');
}
if (isset($_REQUEST['del'])){
require('quitarproductocesta.php');
}
$er=0;
$link=mysqli_connect("localhost","root","dkgamers","dekagamers");
$result=mysqli_query($link,"select vi.codigo_videojuego,vi.titulo,vi.plataforma,vi.precio,vi.descripcion,vi.foto, ve.codigo_V, avg(va.valoracion) from videojuego vi, vende ve, valora va, cesta ce  where vi.codigo_videojuego=ce.codigo_videojuego and ce.cod_pedido='$pedido' group by ce.codigo_videojuego ");

//$result=mysqli_query($link,"select vi.codigo_videojuego,vi.titulo,vi.plataforma,vi.precio,vi.descripcion,vi.foto, ve.codigo_V, avg(va.valoracion) from videojuego vi, vende ve, valora va where vi.codigo_videojuego=ve.codigo_videojuego_V and ve.codigo_videojuego_V=va.codigo_videojuego_R and vi.plataforma='xbox' group by vi.codigo_videojuego");
$er=mysqli_error($link);
if($er!=0){
			die('error de conexion. '.$er);
               }
if (!$result){
die('error de conexion. '.$er);
}
$_SESSION['productos']=mysqli_num_rows($result);
if ($_SESSION['productos']==0){
echo 'Su cesta esta vacia';
$_SESSION['total']=0;
mysqli_free_result($result);
mysqli_close($link);
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

	<script>
	var productos = "<?php echo $_SESSION['productos'] ?>" ;
	var total = "<?php echo $_SESSION['total'] ?>" ;
	actualizacesta(productos,total);
	</script>

<?}
else {
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
			<td><a href="cesta.php?del=<?php print $row[0]?>"><input type="button" value="Quitar"></a>
		</td>
		</tr>
			

<?php
$subtotal=$subtotal+$row[3];
}
$iva=round(($subtotal*21/100), 2, PHP_ROUND_HALF_UP);
?>
</table>
<table bgcolor="" border="4" cellpadding="0" cellspacing="0" width="60%">
<tr>
<td>Subtotal:</td><td><?echo $subtotal;?>
</tr><tr>
<td>I.V.A:</td><td><?echo $iva;?></td>
</tr><tr>
<td>gastos de envio (DHL):</td><td>7</td>
</tr><tr>
<td>Total:</td><td><?echo $subtotal+$iva+7?></td>
</tr>
</table>
<?
mysqli_free_result($result);
mysqli_close($link); 
$_SESSION['total']=$subtotal+$iva+7
?>
<a href="pago.php"><input type="button" value="validar cesta"></a>
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

	<script>
	var productos = "<?php echo $_SESSION['productos'] ?>" ;
	var total = "<?php echo $_SESSION['total'] ?>" ;
	actualizacesta(productos,total);
	</script>

<?
}
}
else {
echo 'debe iniciar sesion para poder comprar';
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
	
<?
}
?>
</body>

</html>
