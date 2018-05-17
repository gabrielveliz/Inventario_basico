<?
$nombre = $_POST["nombre"];
$plazas = $_POST["op"];
$cantidad = $_POST["cantidad"];




include ("../include/coneccion.php");

$consulta = "insert into colchones (nombre,plazas,cantidad) values('$nombre','$plazas',$cantidad)";

$ejecuta_consulta=mysql_query($consulta,$coneccion);  

header('Location: index.php');

?>