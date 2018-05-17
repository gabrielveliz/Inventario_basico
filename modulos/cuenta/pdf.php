<?
include "../../fpdf/fpdf.php";
  include ("../include/coneccion.php");    
  $consulta = "select * from us";
  $ejecuta = mysql_query($consulta,$coneccion);     

class MIPDF extends FPDF{
    public function Header(){
      
      $this -> image("../../conecta/udla.jpg",50,10,100,50);
      $this -> SetFont ('Times','b',20);
      $this -> Ln(50);
      $this -> Cell(10,50,"Listado cuentas",0,0,'c');
      $this -> Ln(30);     
      }
    }


$mipdf = new MIPDF();

$mipdf -> addPage();
$mipdf-> Ln(10);


for($i = 0; $i < count($cabeceraT);$i++)
{
   $mipdf-> Cell(100,10,$cabeceraT[$i],1,0,'c'); 
    
}


$consulta = mysql_query("SELECT * FROM us");
while( $datos = mysql_fetch_array($consulta))
{    
    $usuario = $datos['nom_us'];

    $pass = $datos['con_us'];
    
    $mipdf -> Cell(160,10,'Usuario : '.$usuario,1,0,'c');
    $mipdf-> Ln(10);

    $mipdf -> Cell(160,10,'Password : ------',1,0,'c');
    $mipdf ->Ln(20);
}
$mipdf -> Output();

?>