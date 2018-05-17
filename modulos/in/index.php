<?
session_start();
$nombreusuario= $_SESSION['nombre'];
include ("../../conecta/check.php");

    include ("../include/coneccion.php");    
    $consulta = "select * from colchones order by nombre ASC";
    $ejecuta = mysql_query($consulta,$coneccion);   
?>

<html>
    <head>
    <title>Inventario</title>
            <link rel="icon" type="image/png" href="../../assets/img/icono.png" />
                <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="screen" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div>
          <img id="lo" src="../../img/logo.png">
       </div>
    <div id="bienvenida">
<span><p>Inventario</p></span>
    </div>
    </head>
    <body>
    <br/><br/> 
    <div id="listas">
        <table id="menu" width="100%" align="center">
            <tr>
                <th><a href="cuenta.php">Agregar Colchon</a></th>
                <th><a href="excel.php">Listado Excel</a></th>
                <th><a href="word.php">Listado Word</a></th>
                <th><a href="pdf.php" target="_blank">Listado PDF</a></th>
                <th><a href="../../conecta/exit.php">Cerrar Sesion</a></th>
            </tr>
        </table>
        <br/><br/><br/>
       <center> <table id="lista" width="100%" align="center">
            <caption>Listado de Colchones</caption>
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Plazas</th>
                    <th>Cantidad</th>
                    <th>Accion</th>
                    <th>Accion</th>
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
                        $id1 = $row1["id_colchones"] ;
                        echo "<tr>";                    
                            
                            echo "<td>$row1[nombre]</td>";
                            echo "<td>$row1[plazas]</td>";
                            echo "<td>$row1[cantidad]</td>";
                            echo "<td><a href='vender.php?op=$id1'>Venta</a></td>";
                            echo "<td><a href='ingresar.php?op=$id1'>Ingreso</a></td>";
                            echo "<td><a href='editar.php?op=$id1'>Editar</a></td>";
                            echo "<td><a href='delete.php?op=$id1'>Suprimir</a></td>";

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
