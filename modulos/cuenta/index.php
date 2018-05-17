<?
session_start();

include ("../../conecta/check.php");

    include ("../include/coneccion.php");    
    $consulta = "select * from us order by nom_us ASC";
    $ejecuta = mysql_query($consulta,$coneccion);   
?>

<html>
    <head>
    <title>Cuentas</title>
            <link rel="icon" type="image/png" href="../../assets/img/icono.png" />
                <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="screen" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div>
          <img id="lo" src="../../img/logo.png">
       </div>
    <div id="bienvenida">
<span><p>Cuentas de Usuario</p></span>
    </div>
    </head>
    <body>
    <br/><br/> 
    <div id="listas">
        <table id="menu" width="100%" align="center">
            <tr>
                <th><a href="cuenta.php">Agregar Cuenta</a></th>
                <th><a href="excel.php">Listado Excel</a></th>
                <th><a href="word.php">Listado Word</a></th>
                <th><a href="pdf.php" target="_blank">Listado PDF</a></th>
                <th><a href="../../conecta/exit.php">Cerrar Sesion</a></th>
            </tr>
        </table>
        <br/><br/><br/>
        
        <center> <table id="lista" width="100%" align="center">
            <caption>LISTADO DE CUENTAS</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Ususario</th>
                    <th>Accion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
            <? 
            
                $a1=0;
                while ($row1=mysql_fetch_array($ejecuta))
                    {
                        $a1=$a1+1;
                        $id1 = $row1["id_us"] ;
                        echo "<tr>";                    
                            echo "<td>$a1</td>";
                            echo ("<td>$row1[nom_us]</td>");
                            echo "<td><a href='editar.php?op=$id1'>EDITAR</a></td>";
                            echo "<td><a href='delete.php?op=$id1'>SUPRIMIR</a></td>";

                            
                        echo "</tr>";                    
                        }
            ?>
            
            </tbody>
        </table>
        </center>
<br/><br/>
        <center><a id="ce" href="../">REGRESAR</a></center>
        </div>
    </body>
