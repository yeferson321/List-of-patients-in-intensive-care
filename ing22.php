<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>..::Clínica Central Del Quindio::.</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style type="text/css">
    <!--
    body {
        background-image: url(img/FONDO1.png);
        background-repeat: no-repeat;
    }

    .Estilo1 {
        font-family: Arial, Helvetica, sans-serif
    }

    .Estilo5 {
        color: #000000;
        font-weight: bold;
    }

    .Estilo8 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: bold;
    }

    .Estilo9 {
        font-size: 12px
    }

    .Estilo10 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
    -->
    .alert
    {
    display:
    flex;
    margin:
    0px
    60px;
    position:
    relative;
    padding:
    1rem
    2rem;
    margin-bottom:
    2rem;
    border:
    1px
    solid
    transparent;
    border-radius:
    .25rem;
    justify-content:
    center;
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

    <form action="anali2.php" method="post">
        <?php
$idpaciente=$_POST['idpaciente'];
$idest=$_POST['idest'];
$conectID = odbc_connect("intranet2","intranet2" ,"intranet2") or die ("NO HAY CONEXION");
$sql1="select max(idestado) from aeestados"; 
$result1=odbc_exec($conectID,$sql1)or die(exit("Error en odbc_exec"));
$idestado=odbc_result($result1,1)+1;
$sql1="update aeestados set actual=0 where idpaciente=$idpaciente"; 
$result1=odbc_exec($conectID,$sql1)or die(exit("Error en odbc_exec"));
$resp= "insert into aeestados (idpaciente, idestado, fchestado, idest, actual) values ($idpaciente, $idestado, CURRENT_TIMESTAMP, $idest, 1)";
$result=odbc_exec($conectID,$resp)or die(exit("Error en odbc_exec"));
?>

        <div>&nbsp; </div>

        <table width="100%" border="0" align="center">
            <tr>
                <td>
                    <div align="center"><img src="img/LOGO-CENTRAL.png" width="200" /></div>
                </td>
            </tr>
        </table>

        </table>

        <div class="alert alert-success" role="alert">
            <a href="#" class="alert-link">Cambio de Estado Realizado con Exitoso</a>
        </div>

        <div align="center">

            <div class="guardar">
                <button name="button" type="button" onclick="window.close();" value="Cerrar" class="btn btn-info"
                    style="background-color: #cfe2ff; border-color: #cfe2ff;">Cerrar</button>
            </div>

        </div>

    </form>
</body>

</html>