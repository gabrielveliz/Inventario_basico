<?
$id = $_POST["ID"];

$cantidad = $_POST["cantidad"];
$ingreso=$_POST["ingreso"];
$total=$cantidad + $ingreso;

include ("../include/coneccion.php");

$consulta = "update colchones set cantidad=$total where id_colchones=$id";
$ejecuta_consulta=mysql_query($consulta,$coneccion);  

header('Location: index.php');
?>