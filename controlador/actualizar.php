<?php 


include('../autoload.php');


$mensaje     = null;

$codigo      = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$unidad      = $_POST['unidad'];
$cantidad    = $_POST['cantidad'];
$precio      = $_POST['precio'];


if (strlen($codigo)>0 && strlen($descripcion)>0 && strlen($unidad)>0 && strlen($cantidad)>0 && strlen($precio)>0)
{
  $articulos = new Articulos($codigo,$descripcion,$unidad,$cantidad,$precio);
  $mensaje   = $articulos->actualizar();
  
  if ($mensaje == 'ok') 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Código Actualizado');
    window.location='".PATH."vistas/actualizar.php?codigo=".$codigo."';
    </script>";
  }
  else 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Error');
    window.location='".PATH."vistas/actualizar.php?codigo=".$codigo."';
    </script>";
  }

} 
else
{
  echo "
    <script>
    alert('Revise los datos eviados,estan vacios');
    window.location='".PATH."vistas/actualizar.php?codigo=".$codigo."';
    </script>";
}












 ?>