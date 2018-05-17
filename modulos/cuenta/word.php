<?

header("Content-Type: application/vnd.ms-excel");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("content-disposition: attachment;filename=cuentas.doc");

?>
<?
    include ("../include/coneccion.php");    
    $consulta = "select * from us order by nom_us ASC";
    $ejecuta = mysql_query($consulta,$coneccion);   
?>

<html>
    <head>
    <title>INICIO</title>
    <center><h1>Listado Excel</h1></center>
    <link rel="stylesheet" type="text/css" href="http://grupo1_ing400.byethost10.com/conecta/estilo.css" media="screen" />
    </head>
    <body>
        <table>
            <tr>
            </tr>
        </table>
        <br/>
        <table border="2" width="70%" align="center">
            <caption>LISTADO DE CUENTAS DE USUARIO</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre usuario</th>
                    <th>Contrase&ntilde;a</th>
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
                            echo "<td>$row1[nom_us]</td>";
                            echo "<td>-----------</td>";
                            echo "</tr>";                    
                        }
            ?>
            
            </tbody>
        </table>
    </body>
