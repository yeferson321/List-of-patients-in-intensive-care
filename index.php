<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.::Cl�nica Central Del Quindio::.</title>
<style type="text/css">
<!--
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
-->
</style>
<meta http-equiv="Refresh" content="60" />
</head>
<body>
<?php 
$conectID1 = odbc_connect("intranet2","intranet2" ,"intranet2");
$orden2=
"select nompaciente, nomestado 
from aeestados a, aepacientes b, aeestadosn c
where 
a.idpaciente=b.idpaciente and
a.idest=c.idestado and
actual=1 and a.idest<>0
order by nompaciente, fchestado desc";                    
$result2=odbc_exec($conectID1,$orden2)or die(exit("Error en odbc_exec"));
$cont=0;
$cantidad=odbc_num_fields ($result2);
?>
<table width="100%" border="0" align="center">
  <tr>
    <td><div align="center"><img src="img/LOGO-CENTRAL.png" /></div></td>
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
    if($cont<16)
	{if($cont==0)
	  {?>
    <table width="93%" border="1" align="center" bordercolor="#CCCCCC">
<?php }?>      
      <tr bgcolor="<?php echo $color;?>">
        <td width="66%" ><div align="justify" class="Estilo11"><?php echo $nompaciente;?></div></td>
        <td width="34%" ><div align="justify" class="Estilo11"><?php echo $nomestado;?></div></td>
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
        <td><table width="95%" border="1" align="center" bordercolor="#CCCCCC">
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
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>  
</table>
</body>
</html>
