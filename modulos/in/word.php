<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Inventario.doc");
    include ("../include/coneccion.php");    
    $consulta = "select * from colchones order by nombre ASC";
    $ejecuta = mysql_query($consulta,$coneccion);   
?>

<html>
    <head>
    <title>INICIO</title>
    <center><h1>Listado Word</h1></center>
    </head>
    <body>
            </table>
        <br/><br/><br/>
        <table border="1" width="90%" align="center">
            <caption>Listado de Colchones</caption>
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Plazas</th>
                    <th>Cantidad</th>

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

                        echo "</tr>";                    
                        }
            ?>
            
            </tbody>
        </table>
    </body>
