<?
session_start();
$nombreusuario= $_SESSION['nombre'];
include ("../../conecta/check.php");

?>


<html>
<head>
    <title>Inventario</title>
            <link rel="icon" type="image/png" href="../../assets/img/icono.png" />
                <link rel="stylesheet" type="text/css" href="../../css/estilo.css" media="screen" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div>
          <img id="lo" src="../../img/logo.png">
       </div>
    <div id="bienvenida">
<span><p>Inventario</p></span>
    </div>

</head>
<body>
<hr />

<hr />
<br />
<div id="ingreso">
<h2>Colchones</h2>
<form name="uno" method="POST" action="doscue.php">
<p>Nombre
<input id="texto" name="nombre" type="text" size="20" maxlength="35" required/>
</p>
<br/>
<p>
Plazas
</p>
<p>
<input  type="radio" name="op" value="1/2">1/2
</p>
<p>
<input type="radio" name="op" value="1" checked>1
</p>
<p>
<input type="radio" name="op" value="1 1/2">1 1/2
</p>
<p>
<input type="radio" name="op" value="2">2
</p>
<p>
<br/>
Cantidad
<input id="texto" name="cantidad" type="text" size="11" maxlength="11" required/>
</p>
<p>
<br/>
<input id="bot" type="reset" value="Borrar"/>
<input id="bot" type="submit" value="Enviar"/>
</p>
</form>
</div>

<br />        <center><a id="ce" href="index.php">REGRESAR</a></center>
</body>
</html>

