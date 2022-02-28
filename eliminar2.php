<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>.::Cl�nica Central Del Quindio::.</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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

    .style4 {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }

    .Estilo2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }

    .Estilo3 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 25px;
    }
    -->

    .g-4,
    .gy-4
    {
    --bs-gutter-y:
    1.5rem;
    display:
    flex;
    justify-content:
    center;
    align-items:
    center;
    align-content:
    center;
    flex-direction:
    column;
    }
    .guardar
    {
    text-align:
    center;
    margin-top:
    30px;
    }
    .row-cols-md-3>*
    {
    flex:
    0
    0
    auto;
    width:
    450px;
    }

    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <form id="incid" name="formulario" method="post" action="eliminar3.php">

            <table width="100%" border="0" align="center">
                <tr>
                    <td>
                        <div align="center"><img src="img/LOGO-CENTRAL.png" width="200" /></div>
                    </td>
                </tr>
            </table>

            <div align="center" class="Estilo3">ELIMINAR PACIENTE EN BLOQUE QUIRURGICO</div>


            <?php   
$idpaciente=$_POST['idpaciente'];
$conectID1 = odbc_connect("intranet2","intranet2" ,"intranet2");
$orden2="select nompaciente, docpaciente from aepacientes where idpaciente=$idpaciente";                    
$result2=odbc_exec($conectID1,$orden2)or die(exit("Error en odbc_exec"));
$nompaciente=odbc_result($result2,1);
$docpaciente=odbc_result($result2,2);
?>
            <input name="idpaciente" type="hidden" value="<?php echo $idpaciente; ?>" />

            <table class="table">
                <tbody>
                    <tr>
                        <td>Paciente:</td>
                        <td><?php echo $nompaciente; ?>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Documento:</td>
                        <td><?php echo $docpaciente; ?>&nbsp;</td>
                    </tr>
                </tbody>

            </table>

            <div align="center">

                <div class="guardar">
                    <button name="Eliminar" type="submit" id="seguir" value="Seguir" class="btn btn-info"
                        style="background-color: #00A8A5; border-color: #cfe2ff;">Eliminar</button>
                </div>

            </div>
        </form>

    </div>
    <p>&nbsp;</p>
</body>

</html>