<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<head>
	<title>Layout Basico</title>
	<link href="css/dekagamers.css" rel="stylesheet">
</head>

<body>
	 <div id="contenedor">
		 <div id="cabecera">
		<div id="logo">
			<img src='imagenes/logo.png' width='200px' height='50px'>
	  </div>
	  
	  <div id="busqueda">
		<?php
		if (isset($_SESSION['user'])) {
		  echo "ha iniciado sesion como: ".$_SESSION['user']." con el rol " .$_SESSION['rol'];
		  ?>
		  <a href="http://192.168.12.207/logout.php"><b>cerrar sesion</b></a>
		  <?
		  }
		  else {
		?>
		  <form method="post" name="login" action="login.php">
			 <table><tr><td><img src='imagenes/foto_usuario.png' width='80px' height='80px'></td>
			<td><input type="name" name="usuario"></br>
			<input type="password" name="pass"></br>
			<select name="rol">
			<option selected value>Identifica ROL</option>
			<option>Cliente</option>
			<option>Vendedor</option>
			<option>Redactor</option>
			</select></br>
			<input type="submit" value="Registro" name="registro">
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
	
	<div id="contenido">
	<div id="izq">
		<table>
			<tr>
				<td><h2>Mi cesta:</h2></td>
				<td><img src="imagenes/cesta.jpg" width="75" height="75"></td>
			</tr>
		</table>
		
		<table>
			<form action="" method="POST">

				<tr>
					<td><span></span>Productos totales: </td>
					<td><input type="text" name="productos_totales" size="10"/></td>
				</tr>
				
				<tr>
					<td><span></span>Precio total: </td>
					<td><input type="text" name="precio_total" size="10"/>€</td>
				</tr>

		     	<tr>
		     		
		     		<td><input type="submit" name="botoncesta" value="ACCEDER A MI CESTA" />
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
			<form action="" method="POST">

				<tr>
					<td width="200">Plataforma: </td>
					<td width="300">Precio: </td>
					<td width="500">Género: </td>
					
				</tr>
				<tr>
					<td width="200">
						<input type="checkbox" name="vehicle" value="Car">I have a car
						<input type="checkbox" name="vehicle" value="Car">I have a car 
						<input type="checkbox" name="vehicle" value="Car">I have a car
						<input type="checkbox" name="vehicle" value="Car">I have a car
					</td>
					
					<td width="200">
						
						<input type="checkbox" name="vehicle" value="Car">I have a car
						<input type="checkbox" name="vehicle" value="Car">I have a car 
						<input type="checkbox" name="vehicle" value="Car">I have a car
						<input type="checkbox" name="vehicle" value="Car">I have a car
						
					</td>
					
					<td width="200">
															
						<input type="checkbox" name="vehicle" value="Car">I have a car
						<input type="checkbox" name="vehicle" value="Car">I have a car
			
				
						
					</td>
					
				</tr>

			</form>
	
		</table>
		
						<!--<tr>
					
						<input type="checkbox" name="play3" value="Bike">PS3<br><label for="precio_m">Precio total:</label>
						<input type="text" name="precio_m" size="10"/>€
						<input type="checkbox" name="xbox360" value="Bike">XBOX 360<br>
						<input type="checkbox" name="pc" value="Bike">PC<br>
						<input type="checkbox" name="wii" value="Bike">WII U<br>
					</td>
					
</tr> -->
		
	</div>
		
	</div>
	
		    <div id="drch">
	    <h4>Lorem ipsum dolor sit amet</h4>
	    <p id="articulo">
	    Consectetur adipiscing elit. Itaque eos id agere, ut a se dolores, morbos, debilitates repellant. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Qui est in parvis malis. Non quam nostram quidem, inquit Pomponius iocans; Duo Reges: constructio interrete. Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? Quod equidem non reprehendo; Bonum negas esse divitias, praeposÃ¬tum esse dicis? Quantum Aristoxeni ingenium consumptum videmus in musicis? Quod si ita sit, cur opera philosophiae sit danda nescio. Quantum Aristoxeni ingenium consumptum videmus in musicis?

At iste non dolendi status non vocatur voluptas. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. Negat enim summo bono afferre incrementum diem. Faceres tu quidem, Torquate, haec omnia; Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus; An hoc usque quaque, aliter in vita?

Quae est igitur causa istarum angustiarum? Sed vos squalidius, illorum vides quam niteat oratio. <br/><br/>Torquatus, is qui consul cum Cn.

s placet, partem quandam tuetur, reliquam deserit. Negat enim summo bono afferre incrementum diem. Faceres tu quidem, Torquate, haec omnia; Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus; An hoc usque quaque, aliter in vita?


	    
	    </div>
	
	</div>
	<div class="relleno"></div>
	</div>
	
		<div id="pie">
			Pie de prueba
		</div>
		
		<div class="relleno"></div>
		</div>
		
	</div>
	</div>
	

</body>

</html>