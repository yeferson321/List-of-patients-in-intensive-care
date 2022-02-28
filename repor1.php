<?php
include ("calendario/calendario.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.::Clínica Central Del Quindio::.</title>
<link rel="icon" type="image/png" href="img/logo.png"/>
<link rel="stylesheet" href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap.min.css">
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/jquery.min.js"></script>
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.js"></script>
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url();
	background-repeat: no-repeat;
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	color: #0000CC;
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.Estilo3 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
.Estilo4 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FF0000;
}
-->
</style>
<script language="JavaScript" src="calendario/javascripts.js"></script>
</head>
<form id="ficha" name="ficha" action="repor2.php" method="post">
<body>
 <table width="726" border="1" align="center" bordercolor="#CCCCCC">
    <tr>
      <td width="193" height="33"><div align="center"><img src="img/LOGO-CENTRAL.png" width="193" height="90"></div></td>
      <td width="517"><div align="center" class="Estilo3">
        <div>PACIENTES INGRESADOS A MODULO PACIENTES CIRUG&Iacute;A</div>
      </div></td>
    </tr>
</table>
 <div align="center">
  <table width="507" border="0">
  
  </table>
<div>&nbsp;</div>
<?php
$usuario=$_POST['usuario'];
$conectID = odbc_connect("intranet2","intranet2" ,"intranet2") or die ("NO HAY CONEXION");
/*$resp= "select clave from ufuncionales where iduf=$usuario";
$result=odbc_exec($conectID,$resp)or die(exit("Error en odbc_exec"));
$clave=odbc_result($result,1);
if($pass == $clave) 
 {*/
?>    
  <table width="507" border="1">
  <tr>
  <td width="165" class="Estilo1">Fecha Inicial:</td>
  <td width="326"><div align="left">
    <?php escribe_formulario_fecha_vacio("fecha1","ficha"); ?>
  </div></td>
  </tr>
  <tr>
  <td width="165" class="Estilo1">Fecha Final:</td>
  <td><div align="left">
    <?php escribe_formulario_fecha_vacio("fecha2","ficha"); ?>
  </div></td>
  </tr>
  </table>
<?php
/*}
else
   {
   ?>
  </p>
  <table width="150" border="1" align="center">
    <tr>
     <td><div align="center" class="Estilo5 Estilo4">Clave Incorrecta</div></td>
    </tr>
  </table>
   <?php
   }
   */?>

  <p>
  <input name="usuario" type="hidden" value="<?php echo $usuario; ?>" />
  <input name="Guardar" type="submit" id="guardar" value="Seguir" />
  </p>
</div>
<p align="center">
  <label></label>
  <label></label>
</p>
</form>
</body>
</html>
