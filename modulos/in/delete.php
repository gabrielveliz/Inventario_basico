<?
$id = $_GET["op"];

    include ("../include/coneccion.php");    
    $consulta = "delete from colchones where id_colchones = $id";
    $ejecuta = mysql_query($consulta,$coneccion);  
    
    
       
   header('Location: index.php');
     

?>