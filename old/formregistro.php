<?
session_start();
if (isset($_SESSION['errid'])){
	echo $_SESSION['errid']."<br>";
	}
if (isset($_SESSION['errnif'])){
	echo $_SESSION['errnif']."<br>";
	}
if (isset($_SESSION['errnombre'])){
	echo $_SESSION['errnombre']."<br>";
	}
if (isset($_SESSION['errapellido'])){
	echo $_SESSION['errapellido']."<br>"; 
	}
if (isset($_SESSION['erremail'])){
	echo $_SESSION['erremail']."<br>";	 
	}
if (isset($_SESSION['errtelefono'])){
	echo $_SESSION['errtelefono']."<br>";
	}
if (isset($_SESSION['errdireccion'])) {
	echo $_SESSION['errdireccion']."<br>";
	}
if (isset($_SESSION['errpass'])) {
	echo $_SESSION['errpass']."<br>";
	}
if (isset($_SESSION['errterminos'])) {
	echo $_SESSION['errterminos']."<br>";
	}
session_destroy();
?>
<html>
<head>
<title>DKgamers</title>
</head>
<body>
<table>
<form method="post" name="registro" action="registro.php">
<tr>
<td>Todos los campos marcados con <b>*</b> son <u>obligatorios</u>
<tr>
<td>*Da identificador:</td>
<td><input type="text" name="id" size="45"></td>
</tr></tr>
<td>*Da DNI:</td>
<td><input type="text" name="nif" size="45" maxlength="9"></td>
</tr><tr>
<td>*Da nombre:</td>
<td><input type="text" name="nombre" size="45"></td>
</tr><tr>
<td>*Da apellido:</td>
<td><input type="text" name="apellido" size="45"></td>
</tr><tr>
<td>*Da email:</td>
<td><input type="text" name="email" size="45" ></td>
</tr><tr>
<td>*Da telefono:</td>
<td><input type="text" name="telefono" size="45" maxlength="9"></td>
</tr><tr>
<td>*Da direccion:</td>
<td><input type="text" name="direccion" size="45"></td>
</tr><tr>
<td>*Escribe la contraseña:</td>
<td><input type="password" name="pass" size="45"></td>
</tr><tr>
<td>*Vuelve a escribir la contraseña</td>
<td><input type="password" name="confpass" size="45"></td>
</tr><tr>
<td>*Rol</td>
<td><select name="rol">
<option>cliente</option>
<option>vendedor</option>
<option>redactor</option></td>
</select>
</tr><tr>
<td><input type="checkbox" name="terminos" value="1" checked>Acepto los <a href="congen.php">Terminos y Condiciones Generales</a></td>
<tr></tr>
<tr><td><input type="submit" name="submit" value="confirmar">
<input type="reset" value="resetea"></td>
</tr>
</form>
</table>
</body>
</html>