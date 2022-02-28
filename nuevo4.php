<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->

<html>

<head>
    <title>.::Cl�nica Central Del Quindio::.</title>

    <!--<link rel="icon" type="image/png" href="img/logo.png"/>-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="author" content="Administrador">

    <!--<meta name="generator" content="SWiSHmax http://www.swishzone.com">-->

    <meta name="description" content="logo">
    <meta name="keywords" content="asesoras, ca, ltda, sa, seguros">

    <meta http-equiv="Refresh" content="64;url=http://172.30.0.3:88/Aero/nuevo5.php">
    <!-- text used in the movie -->
    <!-- Created by SWiSHmax - Flash Made Easy - www.swishzone.com -->

    <style type="text/css">
    BODY,
    P,
    SPAN,
    DIV,
    TABLE,
    TD,
    TH,
    UL,
    OL,
    LI {
        font-family: Arial, Helvetica;
        font-size: 14px;
        color: black;
    }

    body {
        background-color: #FFFFFF;
        background-image: url();
        background-repeat: no-repeat;

    }

    .fondo {
        position: absolute;
        z-index: -1;
        filter: blur(3px);


    }

    .style1 {
        font-family: "Courier New", Courier, monospace;
        color: #000000;
        font-weight: bold;
        font-style: italic;
        font-size: 36px;
    }

    .Estilo1 {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 30px;
        color: #47A9A9;
        margin-left: 40%;
        margin-top: -7%;
    }

    @media only screen and (max-width: 800px),
    screen and (orientation: portrait) {
        .Estilo1 {

            text-align: center;
            margin-left: 0%;
            margin-top: 0%;
        }
    }

    .Estilo2 {
        margin-left: 8%;
    }

    @media only screen and (max-width: 800px),
    screen and (orientation: portrait) {
        .Estilo2 {
            margin-left: 0%;
        }
    }

    .Estilo1>h2 {
        font-size: 43px;
    }

    .Estilo11 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #FFFFFF;
    }


    .Estilo14 {
        font-size: 24px
    }

    .text {
        font-size: larger;
        font-size: 45px;
        text-align: center;
    }

    .text2 {
        font-weight: 600;
        font-size: 35px;
        text-align: center;
    }


    .col5 {
        position: absolute;
        margin-top: 4%;
        margin-left: 46%;
    }

    .fondo {
        top: 60px;
        margin-left: 25%;
    }

    .row {
        margin-top: 6%;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff00;
        background-clip: border-box;
        border: none;
        border-radius: 0.25 rem;
        padding: 0% 15%;
    }

    .border {
        border: none !important;
        border-radius: 19px;
    }

    .table {
        padding: 0.5 rem 9.5 rem;
        background-color: #ffffff00 !important;
        --bs-bg-opacity: 1;
    }


    .nav {
        margin-top: 2%;
        display: flex;
        flex-direction: row;
    }

    .nav-item {
        display: flex;
        justify-content: center;
        /* align-content: center; */
        flex-direction: column;
        padding-inline: 25px;

    }

    @media only screen and (max-width: 800px),
    screen and (orientation: portrait) {
        .nav-item {

            flex-direction: row;
        }
    }
    
    </style>

    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>

    <?php 

      //Coneccion a base de datos
      $conectID1 = odbc_connect("intranet2","intranet2" ,"intranet2");

      //Primer consulta
      $orden1="select IDPACIENTE from aeestados where actual=1 and DATEDIFF(minute, fchestado, CURRENT_TIMESTAMP)>30 and idest in(4,6,7,8,9,10)";

      $result1=odbc_exec($conectID1,$orden1)or die(exit("Error en odbc_exec"));

      while(odbc_fetch_row($result1)){

      $idpaciente=odbc_result($result1,1);

      //Segunda cosulta
      $sql5="select max(idestado) from aeestados"; 

      $result5=odbc_exec($conectID1,$sql5)or die(exit("Error en odbc_exec"));

      $idestado=odbc_result($result5,1)+1;

      //tercer consulta
      $sql6="update aeestados set actual=0 where idpaciente=$idpaciente"; 

      $result6=odbc_exec($conectID1,$sql6)or die(exit("Error en odbc_exec"));

      ECHO $sql7= "insert into aeestados (idpaciente, idestado, fchestado, idest, actual) values ($idpaciente, $idestado, CURRENT_TIMESTAMP, 0, 1)";

      $result7=odbc_exec($conectID1,$sql7)or die(exit("Error en odbc_exec"));
    }

    $orden2="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='ADMISIONES' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc"; 

    $result3=odbc_exec($conectID1,$orden2)or die(exit("Error en odbc_exec"));

    $cantidad=odbc_num_fields ($result3);

    if($cantidad>=16){
      $orden3="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='ADMISIONES' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
    }else{
      $orden3="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='ADMISIONES' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
    }

    $result2=odbc_exec($conectID1,$orden3)or die(exit("Error en odbc_exec"));

    $cont=0;

    $cantidad=odbc_num_fields ($result3);

    //consulta

    $orden6="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='QUIROFANO' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc"; 

    $result5=odbc_exec($conectID1,$orden6)or die(exit("Error en odbc_exec"));

    $cantidad=odbc_num_fields ($result5);

    if($cantidad>=16){
      $orden5="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='QUIROFANO' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
    }else{
      $orden5="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='QUIROFANO' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
    }

    $result6=odbc_exec($conectID1,$orden5)or die(exit("Error en odbc_exec"));

    $cont=0;

    $cantidad=odbc_num_fields ($result5);

        //consulta

        $orden7="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='RECUPERACION' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc"; 

        $result7=odbc_exec($conectID1,$orden7)or die(exit("Error en odbc_exec"));
    
        $cantidad=odbc_num_fields ($result7);
    
        if($cantidad>=16){
          $orden8="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='RECUPERACION' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
        }else{
          $orden8="select substring(nompaciente,1,35), nomestado, fechaing from aeestados a, aepacientes b, aeestadosn c where nomestado='RECUPERACION' and a.idpaciente=b.idpaciente and a.idest=c.idestado and actual=1 and a.idest<>0 order by nompaciente, fchestado desc";
        }
    
        $result9=odbc_exec($conectID1,$orden8)or die(exit("Error en odbc_exec"));
    
        $cont=0;
    
        $cantidad=odbc_num_fields ($result7);
    
    
    ?>

    <ul class="nav justify-content-center"  style="display: flex; flex-direction: column;">
        <li class="nav-item Estilo2">
            <img src="img/LOGO-CENTRAL.png" width="290" />
        </li>
        <li class="nav-item Estilo1">
            <h2>.:: Pacientes en area de cirugia ::.</h2>
        </li>
    </ul>

    <div class="fondo position-absolute">
        <img src="img/fondoo.png" width="650" />
    </div>

    <div class="text-center row">

        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th class="border text" style="background-color: #242A2A; color: #FFFFFF;" scope="col">
                            QUIROFANO
                        </th>
                    </tr>
                </thead>
                <?php 
while(odbc_fetch_row($result6))
/*	*/
{
$mod = fmod("$cont", "2");    
if($mod==0)
$nompacienteq=odbc_result($result6,1);
$nomestado=odbc_result($result6,2);
$fechaing=odbc_result($result6,3);	
if($cont<16)
{if($cont==0)
{?>
                <?php }?>
                <tbody>
                    <tr>
                        <td class="border text2" style="color:  #242A2A;"><?php echo $nompacienteq;?></td>
                    </tr>
                </tbody>
                <?php 
}
if($cont>=16)
?>
                <?php }?>
            </table>

        </div>

    </div>

</body>

</html>