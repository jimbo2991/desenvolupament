<?
session_start();
$numero=$_REQUEST['numero'];
$caducidad=$_REQUEST['mes'].'/'.$_REQUEST['ano'];
$seguridad=$_REQUEST['seguridad'];
$titular=$_REQUEST['titular'];
$concepto=$_REQUEST['concepto'];
$importe=$_REQUEST['importe'];
$_SESSION['numero']=$numero;
$_SESSION['caducidad']=$caducidad;
$_SESSION['seguridad']=$numero;
$_SESSION['titular']=$numero;
$_SESSION['importe']=$importe
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Visa</title>
<meta name="generator" content="WYSIWYG Web Builder 8 - http://www.wysiwygwebbuilder.com">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<style type="text/css">
#Image1
{
   border: 0px #000000 solid;
}
#Table1
{
   border: 2px #C0C0C0 solid;
   background-color: transparent;
   border-spacing: 1px;
}
#Table1 td
{
   padding: 0px 0px 0px 0px;
}
#Table1 td div
{
   white-space: nowrap;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text1 div
{
   text-align: left;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text3 div
{
   text-align: left;
}
</style>
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:468px;top:5px;width:602px;height:168px;z-index:0;">
<img src="images/visa.jpg" id="Image1" alt="" border="0" style="width:602px;height:168px;"></div>
<table style="position:absolute;left:672px;top:243px;width:323px;height:115px;z-index:1;" cellpadding="0" cellspacing="1" id="Table1">
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:156px;height:24px;">
<div><span style="color:#000000;font-family:Arial;font-size:13px;"> Numero de Tarjeta</span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">
<?echo "****-****-****-".substr($numero, -4)?></td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:156px;height:24px;">
<div><span style="color:#000000;font-family:Arial;font-size:13px;"> Nombre del titular</span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">
<?echo $titular?></td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:156px;height:24px;">
<div><span style="color:#000000;font-family:Arial;font-size:13px;"> Concepto</span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:24px;">
<?echo $concepto?></td>
</tr>
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;width:156px;height:26px;">
<div><span style="color:#000000;font-family:Arial;font-size:13px;"> Importe</span></div>
</td>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:26px;">
<?echo $importe?></td>
</tr>
</table>
<div id="wb_Text1" style="position:absolute;left:669px;top:476px;width:325px;height:16px;z-index:2;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Estamos verificando sus datos. Espere por favor...</span></div>
<div id="wb_Text3" style="position:absolute;left:583px;top:692px;width:578px;height:16px;z-index:3;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">ADVERTENCIA: pagina falsa de Visa hecha exclusivamente para el proyecto de DAW</span></div>
<meta http-equiv="Refresh" content="5;url=valida.php">
</body>
</html>