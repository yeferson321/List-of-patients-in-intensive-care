<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.::Clínica Central Del Quindio::.</title>
<link rel="icon" type="image/png" href="img/logo.png"/>
<link rel="stylesheet" href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap.min.css">
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/jquery.min.js"></script>
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.js"></script>
<script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Administrador">
<meta name="generator" content="SWiSHmax http://www.swishzone.com">
<meta name="description" content="logo">
<meta name="keywords" content="asesoras, ca, ltda, sa, seguros">
<!-- text used in the movie -->
<!-- Created by SWiSHmax - Flash Made Easy - www.swishzone.com -->
<style type="text/css">
<!--
BODY, P, SPAN, DIV, TABLE, TD, TH, UL, OL, LI {
  font-family: Arial, Helvetica;
  font-size: 14px;
  color: black;
}
.code {
  font-family: Courier New, Monospace;
  font-size: 12px;
  margin: 10px;
  padding: 0px;
  color: blue;
}
body {
	background-color: #FFFFFF;
	background-image: url();
	background-repeat: no-repeat;
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	color: #000000;
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 30px;
	color: #113684;
}
.Estilo11 {font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #FFFFFF; }
.Estilo12 {color: #666666}
.Estilo13 {font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #666666; }
-->
</style>
<?php 
$horaact=Date("h:i:s");
if($horaact>='01:18' and $horaact<='06:16')
{
$tiempo=660;
}
else
{
$tiempo=60;
}
?>
<meta http-equiv="Refresh" content="<?php echo $tiempo;?>" />
</head>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<body >
<?php 
if ($tiempo==660)
{
?>
<center>
 
<img border="0" dynsrc="debder/VIDEO_TS/VTS_01_1.VOB" start="fileopen" loop="infinite"> 
 
</center>
<?php 
}
if ($tiempo==60)
{
?>
<?php 
$conectID1 = odbc_connect("intranet2","intranet2" ,"intranet2");
$orden1="select IDPACIENTE from aeestados where actual=1 and DATEDIFF(minute, fchestado, CURRENT_TIMESTAMP)>30 and idest in(4,6,7,8,9,10)";
$result1=odbc_exec($conectID1,$orden1)or die(exit("Error en odbc_exec"));
while(odbc_fetch_row($result1))
{
$idpaciente=odbc_result($result1,1);
$sql5="select max(idestado) from aeestados"; 
$result5=odbc_exec($conectID1,$sql5)or die(exit("Error en odbc_exec"));
$idestado=odbc_result($result5,1)+1;
$sql6="update aeestados set actual=0 where idpaciente=$idpaciente"; 
$result6=odbc_exec($conectID1,$sql6)or die(exit("Error en odbc_exec"));
$sql7= "insert into aeestados (idpaciente, idestado, fchestado, idest, actual) values ($idpaciente, $idestado, CURRENT_TIMESTAMP, 0, 1)";
$result7=odbc_exec($conectID1,$sql7)or die(exit("Error en odbc_exec"));
}
$orden2="select substring(nompaciente,1,25), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";                
$result3=odbc_exec($conectID1,$orden2)or die(exit("Error en odbc_exec"));
$cantidad=odbc_num_fields ($result3);
if($cantidad>=16)
{
$orden3="select substring(nompaciente,1,25), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where 
a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
}
else
{
$orden3="select nompaciente, nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where 
a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
}
$result2=odbc_exec($conectID1,$orden3)or die(exit("Error en odbc_exec"));
$cont=0;
$cantidad=odbc_num_fields ($result3);
?>
<table width="100%" border="0" align="center">
  <tr>
    <td><div align="center"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,42,0','id','Movie1','width','220','height','85','pluginspage','http://www.macromedia.com/go/getflashplayer','name','Movie1','src','Movie1','bgcolor','#FFFFFF','quality','high','swliveconnect','true','allowscriptaccess','samedomain','movie','Movie1' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,42,0"
  id="Movie1" width="220" height="85">
  <param name="movie" value="Movie1.swf">
  <param name="bgcolor" value="#FFFFFF">
  <param name="quality" value="high">
  <param name="allowscriptaccess" value="samedomain">
  <embed type="application/x-shockwave-flash"
   pluginspage="http://www.macromedia.com/go/getflashplayer"
   width="220" height="85"
   name="Movie1" src="Movie1.swf"
   bgcolor="#FFFFFF" quality="high"
   swLiveConnect="true" allowScriptAccess="samedomain"
  ></embed>
</object></noscript>
</div></td>
    <td colspan="3"><div align="center" class="Estilo1">.:: Usuarios en Bloque Quir&uacute;rgico::.</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>  
<table width="100%" border="0" align="center">  
  <tr>
    <td>
    <?php 
	while(odbc_fetch_row($result2))
    /*	*/
	{
	$mod = fmod("$cont", "2");    
	if($mod==0)
	{$color='#113684';}
	else
	{$color='#85C026';}
	$nompaciente=odbc_result($result2,1);
    $nomestado=odbc_result($result2,2);
    $fechaing=odbc_result($result2,3);	
    if($cont<16)
	{if($cont==0)
	  {?>
    <table width="100%" border="1" align="center" bordercolor="#CCCCCC">
    
<?php }?>      
      <tr bgcolor="<?php echo $color;?>">
        <td ><div align="justify" class="Estilo11"><?php echo $nompaciente;?></div></td>
        <td ><div align="justify" class="Estilo11"><?php echo $nomestado;?></div></td>
        
      </tr>
      <?php 
	  }
	  if($cont>=16)
	  {
	   if($cont==16)
	       {
	  ?>
    </table></td>
        <td>&nbsp;</td>
        <td><table width="100%" border="1" align="center" bordercolor="#CCCCCC">
      
	  <?php }?>
      <tr bgcolor="<?php echo $color;?>">
        <td ><div align="justify" class="Estilo11"><?php echo $nompaciente;?></div></td>
        <td ><div align="justify" class="Estilo11"><?php echo $nomestado;?></div></td>
     
      </tr>
      <?php
	  } 
	  $cont=$cont+1;
	  }
	 ?>    
    </table></td>   
  </tr>
</table>
<?php }?>
</body>
</html>
