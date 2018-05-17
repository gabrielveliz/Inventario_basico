<?

session_start();
$nombreusuario= $_SESSION['nombre'];
include ("../../conecta/check.php"); 

$id=$_GET["op"];
include ("../include/coneccion.php");    
    $consulta = "select * from us where id_us=$id";
    $ejecuta = mysql_query($consulta,$coneccion); 
while ($rojo=mysql_fetch_array($ejecuta))
{
    $p2=$rojo["nom_us"];
    $p4=$rojo["con_us"];
    
    }


?>
<html>
<head>
    <title>Cuentas</title>
            <link rel="icon" type="image/png" href="../../assets/img/icono.png" />
                <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="screen" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div>
          <img id="lo" src="../../img/logo.png">
       </div>
    <div id="bienvenida">
<span><p>Editar</p></span>
    </div>

</head>
<body>
<br />
<div id="ingreso">
<caption>INGRESE DATOS CUENTA</caption>
<form name="uno" method="POST" action="editar2.php">
<p>
<input type="hidden" value="<?echo $id; ?>" name="ID"/>
Usuario<input name="nom" value="<? echo $p2;?>"  type="text" size="35" maxlength="35" />
</p>
<p>
Pass<input name="pass" value="<? echo $p4;?>" type="password" size="10" maxlength="10"/>
</p>
<input id="bot" type="submit" value="Enviar"/>

</form>
</div>
<br />        <center><a id="ce" href="index.php">REGRESAR</a></center>
</body>
</html>