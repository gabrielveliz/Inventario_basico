<?
session_start();
$nombreusuario= $_SESSION['nombre'];
include ("../../conecta/check.php");

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
<span><p>Cuentas</p></span>
    </div>

</head>
<body>
<br />
<div id="ingreso">

<caption>Ingrese Datos</caption>
<form method="POST" action="doscue.php">
<p>
Usuario</td> <td><input id="texto" name="us" type="text" size="10" maxlength="10" />
</p>
<br />
<p>
Pass</td><td><input id="texto" name="pas" type="password" size="10" maxlength="10"/>
</p>
<br />
<p>
TIPO DE CUENTA
</p>
<p>
<input type="radio" name="op" value="1">Administrador
</p>
<p>
<input type="radio" name="op" value="2" checked>Estandar
</p>
<br />
<input id="bot" type="reset" value="Borrar"/>
<input id="bot" type="submit" value="Enviar"/>

</form>
</div>
<br />        <center><a id="ce" href="index.php">REGRESAR</a></center>
</body>
</html>

