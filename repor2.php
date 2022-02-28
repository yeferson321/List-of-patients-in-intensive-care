<html>

<head>
    <title>.::Cl�nica Central Del Quindio::.</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet"
        href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/css/bootstrap.min.css">
    <script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/jquery.min.js"></script>
    <script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.js"></script>
    <script src="http://intranet:81/intranet/siinfo/Bootstrap/bootstrap 3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
    .Estilo3 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: bold;
    }

    .Estilo14 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .Estilo15 {
        color: #990000
    }
    </style>

    <SCRIPT language="javascript">

    function abrir_ventana(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id +
            "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=450,height=380,left = 100,top = 100');"
            );
    }

    function abrir_ventana2(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id +
            "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=600,height=600,left = 50,top = 50');"
            );
    }

    function abrir_ventana3(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id +
            "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=700,left = 0,top = 0');"
            );
    }
    </SCRIPT>
    
</head>

<body>
    <form name="rnoconf" method="post">
        <table width="393" border="1" align="center" bordercolor="#CCCCCC">
            <tr>
                <td width="194">
                    <div align="center"><img src="img/LOGO-CLINICA.png" width="193" height="60" /></div>
                </td>
                <td width="183">
                    <div align="center" class="Estilo3">PACIENTES INGRESADOS A MODULO PACIENTES CIRUG&Iacute;A</div>
                </td>
            </tr>
        </table>
        <p>
            <?php
   $fecha1=$_POST['fecha1'];   
   $fecha2=$_POST['fecha2'];      
   $conectID = odbc_connect("intranet2","intranet2" ,"intranet2");   
    ?>
        <p>
        </p>
        <table width="100%" border="1" align="center" bordercolor="#CCCCCC">
            <tr class="Estilo3">
                <td width="15%">
                    <div align="center">Documento</div>
                </td>
                <td width="50%">
                    <div align="center">Nombre</div>
                </td>
                <td width="35%">
                    <div align="center">Fch. Ingreso</div>
                </td>
            </tr>
            <?php
          $resp= "select * from aepacientes where fechaing>='$fecha1' and fechaing<='$fecha2' order by nompaciente";
		  $result=odbc_exec($conectID,$resp)or die(exit("Error en odbc_exec"));
          while(odbc_fetch_row($result))
          {
		  $nompaciente=odbc_result($result,2);
		  $docpaciente=odbc_result($result,3);
		  $fechaing=odbc_result($result,4);

		  ?>
            <tr class="Estilo14">
                <td>
                    <div align="center"><?php echo $docpaciente; ?>&nbsp;</div>
                </td>
                <td>
                    <div align="center"><?php echo $nompaciente; ?>&nbsp;</div>
                </td>
                <td>
                    <div align="center"><?php echo $fechaing; ?>&nbsp;</div>
                </td>
            </tr>
            <?php
	  }
	  ?>
        </table>
        <div>&nbsp;</div>
        <div align="center">
            <input name="button" type="button" onClick="window.close();" value="Cerrar" />
        </div>
    </form>
</body>

</html>