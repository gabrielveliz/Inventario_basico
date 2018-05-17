<?
$id = $_POST["ID"];

$nombreus = $_POST["nom"];
$contrasena = $_POST["pass"];

include ("../include/coneccion.php");

$consulta = "update us set nom_us='$nombreus',con_us='$contrasena' where id_us=$id";
$ejecuta_consulta=mysql_query($consulta,$coneccion);  

header('Location: index.php');
?>