<?
include "../../fpdf/fpdf.php";
  include ("../include/coneccion.php");    
  $consulta = "select * from colchones";
  $ejecuta = mysql_query($consulta,$coneccion);     

class MIPDF extends FPDF{
    public function Header(){
      
      $this -> image("../../img/logo.png",50,10,100,50);
      $this -> SetFont ('Arial','b',10);
      $this -> Ln(50);
      $this -> Cell(10,50,"Inventario",0,0,'c');
      $this -> Ln(30);     
      }
    }
$mipdf = new MIPDF();

$mipdf -> addPage();

for($i = 0; $i < count($cabeceraT);$i++)
{
   $mipdf-> Cell(100,10,$cabeceraT[$i],1,0,'c'); 
    
}

$consulta = mysql_query("SELECT * FROM colchones");
while( $datos = mysql_fetch_array($consulta))
{    
    $marca = $datos['nombre'];
    $plazas = $datos['plazas'];
    $cantidad = $datos['cantidad'];

    $mipdf -> Cell(160,5,"Nombre : ".$marca,1,0,'c');
    $mipdf-> Ln(5);
    $mipdf -> Cell(160,5,"Plazas : ".$plazas,1,0,'c');
    $mipdf ->Ln(5);
    $mipdf -> Cell(160,5,"Cantidad : ".$cantidad,1,0,'c');
    $mipdf ->Ln(10);
}
$mipdf -> Output();

?>