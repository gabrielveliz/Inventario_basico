<?
$id = $_GET["op"];

    include ("../include/coneccion.php");    
    $consulta = "delete from us where id_us = $id";

    $ejecuta = mysql_query($consulta,$coneccion);  
    
    header('Location: index.php');
     

?>