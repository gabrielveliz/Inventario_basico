<? 
$host="Localhost";
$nombre_usuario="root";
$pas = "";
$nombre_base_datos="";

$conecta = mysql_connect($host,$nombre_usuario,$pas)  or die ("error al conectar");
$db = mysql_select_db($nombre_base_datos,$conecta);
?>