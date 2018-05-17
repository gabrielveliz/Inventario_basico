<?php

    session_start();
    include ("conecta.php");
    $cuenta= $_POST['cu'];
    $contrasena= $_POST['pas'];

    $logueo= mysql_query("SELECT *  FROM us WHERE nom_us = '$cuenta' AND con_us = '$contrasena'",$conecta);
    
    if($reg=mysql_fetch_array($logueo))
        {
         $_SESSION['nombre']=$reg['nom_us'];
            echo"<script>location.href='http://control.mueblesveliz.cl/modulos/index.php';</script>";
        }
    
    
    else
        {
         echo"<script>alert('usuario o clave incorrectos');</script>";
         echo"<script>location.href='http://control.mueblesveliz.cl/';</script>";
        }

?>