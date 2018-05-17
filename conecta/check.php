<?
session_start(); 

if (isset($_SESSION['nombre']))
    {
        $nombre=$_SESSION['nombre'];

    } 
    else
    {  
        header("location:http://control.mueblesveliz.cl/");
    }

?>