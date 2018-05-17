<?
$nombreus = $_POST["us"];
$contrasena = $_POST["pas"];
$tipo = $_POST["op"];


include ("../include/coneccion.php");

$consulta = "insert into us (nom_us,tipo,con_us) values('$nombreus',$tipo,'$contrasena');";

$ejecuta_consulta=mysql_query($consulta,$coneccion);  

header("Location:index.php");

?>