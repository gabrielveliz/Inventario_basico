<?
$id = $_POST["ID"];

$cantidad = $_POST["cantidad"];
$vender=$_POST["vender"];
$total=$cantidad - $vender;

include ("../include/coneccion.php");
if($total>=0)
{
    

$consulta = "update colchones set cantidad=$total where id_colchones=$id";
$ejecuta_consulta=mysql_query($consulta,$coneccion);
header('Location: index.php');  
}
else
{
         echo"<script>alert('Sin Stock para la Venta Realizada');</script>";
         echo"<script>location.href='http://control.mueblesveliz.cl/modulos/in/index.php';</script>";
}

?>