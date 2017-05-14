<?php 


include('../autoload.php');


$mensaje     = null;

$codigo      = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$unidad      = $_POST['unidad'];
$cantidad    = $_POST['cantidad'];
$precio      = $_POST['precio'];

$validacion =  new Validacion();

if ($validacion->codigo($codigo)=='ok')
{

if (strlen($codigo)>0 && strlen($descripcion)>0 && strlen($unidad)>0 && strlen($cantidad)>0 && strlen($precio)>0)
{
  $articulos = new Articulos($codigo,$descripcion,$unidad,$cantidad,$precio);
  $mensaje   = $articulos->agregar();
  
  if ($mensaje == 'existe') 
  {
  echo "
  <meta charset='UTF-8'> 
    <script>
    alert('Código Duplicado');
     window.location='".PATH."vistas/registrar.php';
    </script>";
  }
 else if ($mensaje == 'ok') 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Código Registrado');
     window.location='".PATH."vistas/lista.php';
    </script>";
  }
  else 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Error');
     window.location='".PATH."vistas/registrar.php';
    </script>";
  }

} 
else
{
  echo "
    <script>
    alert('Revise los datos eviados,estan vacios');
     window.location='".PATH."vistas/registrar.php';
    </script>";
}


} 
else
{
 echo "
   <meta charset='UTF-8'> 
    <script>
    alert('El Código no es valido');
     window.location='".PATH."vistas/registrar.php';
    </script>";
}


 ?>