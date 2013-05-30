<html>
<head>
<title>DKgamers</title>
<script>
function valida_envia(){ 
  	//valido el nombre 
   	if (document.fvalida.numero.value.length!=15){ 
      	 alert("Numero de tarjeta de credito incorrecto") 
      	 document.fvalida.numero.focus() 
      	 return 0; 
   	} 
	
	if (isNaN(document.fvalida.numero.value)){ 
      	 alert("Numero de tarjeta de credito incorrecto") 
      	 document.fvalida.numero.focus() 
      	 return 0; 
   	} 
	
	if (isNaN(document.fvalida.mes.value)) { 
      	 alert("Fecha de caducidad incorrecta") 
      	 document.fvalida.mes.focus()
		 document.fvalida.ano.focus()		 
      	 return 0; 
   	} 
	
	if (isNaN(document.fvalida.ano.value)) { 
      	 alert("Fecha de caducidad incorrecta") 
      	 document.fvalida.mes.focus()
		 document.fvalida.ano.focus()		 
      	 return 0; 
   	} 
	
	if (document.fvalida.mes.value<1 || document.fvalida.mes.value>12 ) { 
      	 alert("Fecha de caducidad incorrecta") 
      	 document.fvalida.mes.focus()
		 document.fvalida.ano.focus()		 
      	 return 0; 
   	} 
	
	if (isNaN(document.fvalida.seguridad.value)){ 
      	 alert("Codigo de seguridad incorrecto") 
      	 document.fvalida.seguridad.focus()		 
      	 return 0; 
   	} 
	
	if (document.fvalida.seguridad.value.length!=4){ 
      	 alert("Codigo de seguridad incorrecto") 
      	 document.fvalida.seguridad.focus()		 
      	 return 0; 
   	} 
	
	if (document.fvalida.titular.value.length==0){ 
      	 alert("Inserte el nombre completo del titular") 
      	 document.fvalida.numero.focus() 
      	 return 0; 
   	} 

   	//el formulario se envia 
   	alert("Estamos enviando sus datos a su entidad bancaria.en breves momentos recibira la respuesta a esta operacion"); 
   	document.fvalida.submit(); 
} 
</script>
</head>
<body>
<table>
<?
if (isset($_SESSION['aexpresserror'])){
	if ($_SESSION['aexpresserror']==1){
	echo "Usted no tiene tarjeta de credito en American Express";
	}
	if ($_SESSION['aexpresserror']==2){
	echo "Su tarjeta de credito esta anulada o ha caducado";
	}
	if ($_SESSION['aexpresserror']==3){
	echo "El nombre del titular no coincide con su numero de tarjeta de credito";
	}
	if ($_SESSION['aexpresserror']==4){
	echo "El codigo de seguridad no es correcto";
	}
	if ($_SESSION['aexpresserror']==5){
	echo "Su tarjeta de credito no dispone de suficiente saldo para realizar esta operacion";
	}
	if ($_SESSION['aexpresserror']==6){
	echo "La fecha de caducidad no concuerda con su tarjeta";
	}
	session_unset($_SESSION['aexpresserror']);
}

?>
<form name="fvalida" action="verificaaexpress.php" method="post"> 
<table> 
<tr> 
   	<td>Numero de tarjeta: </td> 
   	<td><input type="text" name="numero" size="15" maxlength="15"></td> 
</tr> 
<tr> 
   	<td>Fecha de caducidad</td> 
   	<td><input type="text" name="mes" size="2" maxlength="2">/<input type="text" name="ano" size="2" maxlength="2"></td> 
</tr> 
<tr> 
   	<td>Codigo de seguridad <b><u><a href="javascript:window.open('ayudaaexpress.php')">Ayuda</a></b></u></td> 
   	<td><input type="text" name="seguridad" size="4" maxlength="4"></td> 
</tr> 
<tr> 
   	<td>Nombre completo del titular</td> 
    <td><input type="text" name="titular" size="16" maxlength="16">
   	</td> 
</tr> 
<tr> 
   	<td colspan="2" align="center"><input type="button" value="Enviar" onclick="valida_envia()"></td> 
</tr> 
</table> 
</form> 

</body>
</html>