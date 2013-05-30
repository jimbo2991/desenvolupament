<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
	<title>Dekagamers</title>
	<link href="css/index.css" rel="stylesheet">
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
	
	<div id ="contenedorj">	
		
		<h1 align="center"><font face="Microsoft Sans Serif" size="6"><b>Política
de Privacidad de dekagamers</b></font></h1>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">Alejandro Martin Lopez con CIF 00000000F (en adelante dekagamers) de nacionalidad
española con domicilio en Terrassa España , </font><font color="#ff0000" face="Microsoft Sans Serif" size="3">Calle
Torrent del Batlle 10, es titular de la website <a href="http://www.dekagamers.net/" target="_blank">www.dekagamers.net</a></font><font face="Microsoft Sans Serif" size="3">, y como tal, les informa que
para hacer uso de los servicios que les ofrece nuestro portal de Internet,
así como el envio de publicidad a su email y proporcionarle las novedades
de nuestro portal, es necesario que nos suministre determinados datos
de carácter personal, que en cumplimiento de la Ley Orgánica de Protección
de Datos (15/1999), serán objeto de tratamiento automatizado e incorporados
a nuestro correspondiente fichero, denominado </font><font color="#ff0000" face="Microsoft Sans Serif" size="3">Clientes
dekagamers</font><font face="Microsoft Sans Serif" size="3"> y debidamente
registrado en la Agencia de Protección de Datos, con la exclusiva finalidad
de proporcionarle los servicios ofertados.</font></p>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Consentimiento
y autorización al tratamiento automatizado de sus datos personales</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">dekagamers,
como responsable del fichero, considera que en el momento que nos facilita
sus datos de carácter personal a través de los diversos formularios
que contiene esta página web o mediante correo electrónico, nos está
otorgando su autorización y consentimiento expreso para el tratamiento
de sus datos en nuestro fichero informatizado, si bien con carácter
revocable y sin efectos retroactivos, y acepta las presentes políticas
de privacidad respecto a sus datos, que serán tratados con absoluta
confidencialidad y cumpliendo todas las exigencias legales recogidas
en la Ley Orgánica de Protección de Datos y demás legislación aplicable.
Las presentes políticas de privacidad se rigen por la normativa exclusivamente
aplicable en España, quedando sometida a ella, tanto nacionales como
extranjeros que utilicen esta web.</font></p>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Qué
datos solicitamos y con qué finalidad</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">dekagamers,
le informa que en ningún caso está obligado a facilitarnos sus datos
personales, y que éstos son los adecuados, pertinentes y estrictamente
necesarios para cumplir con la finalidad por la que se recogen, no obstante,
estos son imprescindibles para proporcionarle los servicios ofertados,
todos los campos son de obligada respuesta ya que son necesarios para
proporcionarle el servicio.</font></p>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">La
finalidad de la solicitud de datos personales a través de nuestra página
web no es otra que la de poder ofrecerle todos los siguientes servicios:</font></p>
<ul type="disc">
  <li><font face="Microsoft Sans Serif" size="3">Administración
  de su cuenta en nuestro portal de <a href="http://www.dekagamers.net/" target="_blank">dekagamers.net</a>.</font></li>
  <li><font face="Microsoft Sans Serif" size="3">Envio de publicidad
  a su email bien desde dekagamers o empresas realacionadas con email marketing.</font></li>
  <li><font face="Microsoft Sans Serif" size="3">Informar de
  los servicios de dekagamers, envio de boletines frecuentes con la intención
  de mantenerle informado sobre las novedades y mejoras de nuestro portal.</font></li>
</ul>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Derechos
de acceso, rectificación, cancelación
y oposición de sus datos personales</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">A
los efectos de lo dispuesto en la Ley Orgánica 15/99, de 13 de diciembre,
de Protección de Datos de Carácter Personal, el cliente tiene reconocidos
y podrá ejercitar los derechos de acceso, cancelación, rectificación
y oposición. A tal efecto, en cualquier momento el cliente tiene derecho
a acceder gratuitamente a nuestro fichero automatizado para consultar
sus datos, rectificarlos si son erróneos o han variado, cancelarlos
si no desea seguir incorporado a ellos, u oponerse. Para ello, puede
comunicarnos el derecho que desee ejercer por escrito o personalmente
en nuestra oficina </font><font color="#ff0000" face="Microsoft Sans Serif" size="3">Terrassa, Calle Torrent del Batlle 10,</font><font face="Microsoft Sans Serif" size="3">
o en el correo electrónico </font><a><font face="Microsoft Sans Serif" size="3"><u>dekagamers
[a-rro-ba] dekagamers.net</u></font></a><font face="Microsoft Sans Serif" size="3">,
haciendo constar:</font></p>
<ul type="disc">
  <li><font face="Microsoft Sans Serif" size="3">Nombre y apellidos.</font></li>
  <li><font face="Microsoft Sans Serif" size="3">Petición en
  la que se concreta la solicitud.</font></li>
  <li><font face="Microsoft Sans Serif" size="3">Domicilio a
  efecto de notificaciones o correo electrónico.</font></li>
  <li><font face="Microsoft Sans Serif" size="3">Fecha y firma.</font></li>
</ul>
<p align="justify"><font face="Microsoft Sans Serif" size="3">O bien
en online puede ejercer su derecho a cancelación&nbsp; a través de
la siguiente url:</font></p>
<ul><ul type="disc">
    <li><a href="http://www.dekagamers.net/bajas/" target="_blank"><font face="Microsoft Sans Serif" size="3"><u>http://www.dekagamers.net/bajas/</u></font></a></li>
    <li><font face="Microsoft Sans Serif" size="3">Siguiendo los
    pasos indicados en dicha pagina.</font></li>
</ul></ul>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Cesión
o comunicación de sus datos</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">dekagamers,
le informa que sus datos son tratados confidencialmente y podrán ser
cedidos a otras entidades o empresas del sector para realizar envios
publicitarios a su cuenta de correo electrónico según los intereses
elegidos.</font></p>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Actualización
y Cancelación de sus datos</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">Es
importante que para que podamos mantener sus datos personales actualizados,
nos informe siempre que haya habido alguna modificación en ellos, en
caso contrario, no respondemos de la veracidad de los mismos. Asimismo,
nos certifica que todos los datos que Ud. nos facilita son ciertos,
vigentes y pertinentes para la finalidad por la que se los solicitamos,
y que los facilita por sí mismo. Entendemos que si no cancela sus datos
personales expresamente de nuestro fichero, continúa interesado en
seguir incorporado al mismo hasta que dekagamers lo considere oportuno
y mientras sea adecuado a la finalidad por la que se obtuvieron.</font></p>
<h2 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3"><b>Garantía
de Confidencialidad y Seguridad de los ficheros automatizados</b></font></h2>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Microsoft Sans Serif" size="3">dekagamers
en respuesta a la confianza depositada en nosotros y teniendo en cuenta
la importancia en materia de protección y confidencialidad que requieren
sus datos personales, les informa que ha adoptado todas las medidas
de índole técnica y organizativa necesarias para salvaguardar la seguridad
de los mismos tal como exige el Real Decreto 994/1999 que regula el
reglamento de medidas de seguridad de los ficheros automatizados que
contengan datos de carácter personal. Ello no obstante, el usuario
debe ser consciente de que las medidas de seguridad en Internet no son
inexpugnables.</font></p>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Times New Roman" size="3">dekagamers
puede modificar las presentes políticas de privacidad para adaptarlas
a las medidas legislativas o jurisprudenciales sobre datos personales
que vayan apareciendo, por lo que exige su lectura, cada vez que nos
facilite sus datos a través de esta Web.</font></p>
<p align="justify">&nbsp;</p>
<p><STRONG>POLITICA DE PRIVACIDAD</STRONG></p>
<p>Nuestra política de privacidad describe como recogemos, guardamos o   utilizamos la información que recabamos a través de los diferentes servicios o   páginas disponibles en este sitio. Es importante que entienda que información   recogemos y como la utilizamos ya que el acceso a este sitio implica la   aceptación nuestra política de privacidad.</p>
<p><STRONG>Cookies</STRONG></p>
<p>El acceso a este puede implicar la utilización de cookies. Las cookies son   pequeñas cantidades de información que se almacenan en el navegador utilizado   por cada usuario para que el servidor recuerde cierta información que   posteriormente pueda utilizar. Esta información permite identificarle a usted   como un usuario concreto y permite guardar sus preferencias personales, así como   información técnica como puedan ser visitas o páginas concretas que   visite.<BR>
  Aquellos usuarios que no deseen recibir cookies o quieran ser   informados antes de que se almacenen en su ordenador, pueden configurar su   navegador a tal efecto.</p>
<p>La mayor parte de los navegadores de hoy en día permiten la gestión de las   cookies de 3 formas diferentes:</p>
<p>Las cookies no se aceptan nunca.<BR>
  El navegador pregunta al usuario si se   debe aceptar cada cookie.<BR>
  Las cookies se aceptan siempre.<BR>
  El navegador   también puede incluir la posibilidad de especificar mejor qué cookies tienen que   ser aceptadas y cuáles no. En concreto, el usuario puede normalmente aceptar   alguna de las siguientes opciones: rechazar las cookies de determinados   dominios; rechazar las cookies de terceros; aceptar cookies como no persistentes   (se eliminan cuando el navegador se cierra); permitir al servidor crear cookies   para un dominio diferente. Además, los navegadores pueden también permitir a los   usuarios ver y borrar cookies individualmente.</p>
<p>Dispone de más información sobre las Cookies en:   http://es.wikipedia.org/wiki/Cookie</p>
<p><STRONG>Web Beacons</STRONG></p>
<p>Este sitio puede albergar también web beacons (también conocidos por web   bugs). Los web beacons suelen ser pequeñas imágenes de un pixel por un pixel,   visibles o invisibles colocados dentro del código fuente de las páginas web de   un sitio. Los Web beacons sirven y se utilizan de una forma similar a las   cookies. Además, los web beacons suelen utilizarse para medir el tráfico de   usuarios que visitan una página web y poder sacar un patrón de los usuarios de   un sitio.</p>
<p>Dispone de más información sobre los web beacons en:   http://es.wikipedia.org/wiki/Web_bug</p>
<p><STRONG>Terceros</STRONG></p>
<p>En algunos casos, compartimos información sobre los visitantes de este sitio   de forma anónima o agregada con terceros como puedan ser anunciantes,   patrocinadores o auditores con el único fin de mejorar nuestros servicios. Todas   estas tareas de procesamiento serán reguladas según las normas legales y se   respetarán todos sus derechos en materia de protección de datos conforme a la   regulación vigente.</p>
<p>Este sitio mide el tráfico con diferentes soluciones que pueden utilizar   cookies o web beacons para analizar lo que sucede en nuestras páginas.   Actualmente utilizamos las siguientes soluciones para la medición del tráfico de   este sitio. Puede ver más información sobre la política de privacidad de cada   una de las soluciones utilizadas para tal efecto:</p>
<p>Google (Analytics):   http://www.google.com/intl/es_ALL/privacypolicy.html<BR>
</p>
<p>Este sitio también puede albergar publicidad propia, de afiliados, o de redes   publicitarias. Esta publicidad se muestra mediante servidores publicitarios que   también utilizan cookies para mostrar contenidos publicitarios afines a los   usuarios. Cada uno de estos servidores publicitarios dispone de su propia   política de privacidad, que puede ser consultada en sus propias páginas web.</p>
<p>Actualmente este sitio alberga publicidad de:</p>
<p>Google Adsense: http://www.google.com/intl/es_ALL/privacypolicy.html</p>
<p align="justify">&nbsp;</p>
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
