<?
$id = $_POST["ID"];
$nombre = $_POST["nombre"];
$plazas = $_POST["op"];
$cantidad = $_POST["cantidad"];

include ("../include/coneccion.php");

$consulta = "update colchones set nombre='$nombre',plazas='$plazas',cantidad=$cantidad where id_colchones=$id";
$ejecuta_consulta=mysql_query($consulta,$coneccion);  

header('Location: index.php');
?>