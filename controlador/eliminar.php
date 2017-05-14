<?php 


include('../autoload.php');


$mensaje     = null;

$codigo      = $_GET['codigo'];


if (strlen($codigo)>0 )
{
  $articulos = new Articulos($codigo);
  $mensaje   = $articulos->eliminar();
  
  if ($mensaje == 'ok') 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Código Eliminado');
     window.location='".PATH."vistas/lista.php';
    </script>";
  }
  else 
  {
  echo "
   <meta charset='UTF-8'> 
    <script>
    alert('Error');
     window.location='".PATH."vistas/lista.php';
    </script>";
  }

} 
else
{
  echo "
    <script>
    alert('Revise los datos eviados,estan vacios');
     window.location='".PATH."vistas/lista.php';
    </script>";
}




 ?>