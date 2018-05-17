<?
session_start();
$nombreusuario= $_SESSION['nombre'];
include ("../../conecta/check.php"); 

$id=$_GET["op"];
include ("../include/coneccion.php");    
    $consulta = "select * from colchones where id_colchones=$id";
    $ejecuta = mysql_query($consulta,$coneccion); 
while ($rojo=mysql_fetch_array($ejecuta))
{
    $p1=$rojo["nombre"];
    $p2=$rojo["plazas"];
    $p3=$rojo["cantidad"];     
}
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
<span><p>Venta</p></span>
    </div>

</head>
<body>

<br />
<div id="ingreso">
<caption>Datos del Producto</caption>
<form name="uno" method="POST" action="vender2.php">
<input type="hidden" value="<?echo $id; ?>" name="ID"/>
<input type="hidden" value="<?echo $p3; ?>" name="cantidad"/>
<?
echo "<p> Nombre : ".$p1."</p>";
echo "<p> Plazas : ".$p2."</p>";
echo "<p> Cantidad : ".$p3."</p>";
?>
<p>
Cantidad Vendida</td> <td><input id="texto" name="vender"  type="text" size="11" maxlength="10"  required=""/>
</p>

<input id="bot" type="submit" value="Enviar"/>

</div>
<br />        <center><a id="ce" href="index.php">REGRESAR</a></center>
</body>
</html>