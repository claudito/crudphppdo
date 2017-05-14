<?php 


class Validacion
{
	
	function __construct()
	{
	
	}


   function codigo($cadena)
   {

	if(ereg("[\-_a-zA-Z0-9]$",$cadena)) 
	{ 
	  return "ok";
	} 
	else 
	{ 
	  return "error";
	} 

   }


}






 ?>