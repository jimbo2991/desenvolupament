<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
#Image2
{
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
<img src="images/wwb_img1.jpg" id="Image1" alt="" border="0" style="width:602px;height:168px;"></div>
<div id="wb_Image2" style="position:absolute;left:522px;top:294px;width:460px;height:104px;z-index:1;">
<img src="images/icon_load_roundcorner_lock1_186x42_withlock.gif" id="Image2" alt="" border="0" style="width:460px;height:104px;"></div>
<div id="wb_Text1" style="position:absolute;left:608px;top:211px;width:441px;height:16px;z-index:2;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Estamos verificando sus datos. Espere por favor...</span></div>
<div id="wb_Text3" style="position:absolute;left:468px;top:692px;width:578px;height:16px;z-index:3;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">ADVERTENCIA: pagina falsa de PayPal hecha exclusivamente para el proyecto de DAW</span></div>
<?
sleep(20);
if (($_REQUEST['Editbox1']=="") || ($_REQUEST['Editbox2']=="")){
$_SESSION['error']=1;
header('location:paypal.php');
}
else{
header('location:../confirmacion.php');
}
?>
</body>
</html>