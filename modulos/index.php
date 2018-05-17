<?
include "../conecta/check.php";

?>
<html>
    <head><title>Muebles Veliz</title>
    <link rel="icon" type="image/png" href="../assets/img/icono.png" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" media="screen" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body> 
        <div>
          <img id="lo" src="../img/logo.png">
       </div>
       <div id="bienvenida">
    <?
    $nom=$_SESSION['nombre'];
    echo "<center><span><p>Bienvenido/a ".strtoupper($nom)." ¿Que desea hacer?</p></span></center>";
    ?>
    </div>
<div class="panel">
<center>
 
       <table  id="panel">
               <tr>
                <td><a href="in/">Inventario</a></td>
               </tr>
               <? 
                   session_start();
    include ("../conecta/conecta.php");
    $cuenta=$_SESSION['nombre']; 
    $logueo= mysql_query("SELECT *  FROM us WHERE nom_us = '$cuenta'",$conecta);
    if($reg=mysql_fetch_array($logueo))
        {
           $tipo=$reg['tipo'];

        }
        if($tipo==1)
        {

            echo " <tr><td><a href='cuenta/'>Cuentas Usuarios</a></td></tr>";
        }?>
                <tr>
                <td id="cerrar"><a href="../conecta/exit.php">Cerrar Sesion</a></td>
               </tr>

        </table>
        </center>

        </div>
    </body>
</html>