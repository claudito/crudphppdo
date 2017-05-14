<?php 


class Articulos
{


protected $codigo;
protected $descripcion;
protected $unidad;
protected $cantidad;
protected $precio;


function __construct($codigo = '',$descripcion='',$unidad='',$cantidad='',$precio='')
{
   $this->codigo       = $codigo;
   $this->descripcion  = $descripcion;
   $this->unidad       = $unidad;
   $this->cantidad     = $cantidad;
   $this->precio       = $precio;

}


public function agregar()
{

   try {

    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    $query     = "SELECT * FROM maeart WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO maeart(codigo,descripcion,unidad,cantidad,precio)VALUES(:codigo,:descripcion,:unidad,:cantidad,:precio)";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->bindParam(':descripcion',$this->descripcion);
    $statement->bindParam(':unidad',$this->unidad);
    $statement->bindParam(':cantidad',$this->cantidad);
    $statement->bindParam(':precio',$this->precio);
    if(!$statement)
    {
    return "error";
    }
    else
    {
    $statement->execute();
    return "ok";
    }
    }


       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }


}


public function actualizar()
{

   try {

    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
     $query     = "UPDATE  maeart  SET descripcion=:descripcion,unidad=:unidad,cantidad=:cantidad,precio=:precio WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->bindParam(':descripcion',$this->descripcion);
    $statement->bindParam(':unidad',$this->unidad);
    $statement->bindParam(':cantidad',$this->cantidad);
    $statement->bindParam(':precio',$this->precio);
    if(!$statement)
    {
    return "error";
    }
    else
    {
    $statement->execute();
    return "ok";
    }


       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }


}


public function eliminar()
{

   try {

    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
     $query     = "DELETE FROM  maeart  WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    if(!$statement)
    {
    return "error";
    }
    else
    {
    $statement->execute();
    return "ok";
    }


       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }


}






public function lista()
{

    try {
        
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    $query     = "SELECT * FROM maeart";
    $statement = $conexion->prepare($query); 
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;


    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
}


public function consulta($campo)
{

    try {
        
    $modelo    = new Conexion();
    $conexion  = $modelo->get_conexion();
    $query     = "SELECT * FROM maeart WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];



    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
}




}





 ?>