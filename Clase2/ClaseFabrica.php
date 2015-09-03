<?php 

/**
* 
*/
require_once  "ClasePersona.php";
require_once  "ClaseEmpleado.php";
class Fabrica  
{
	
	private $_razonSocial;
	private $_empleados;

	function __construct($RazonSocial)
	{
		$this->_razonSocial = $RazonSocial;
	    $this->_empleados =   array();
	}

public function AgregarPersona($per)
{
array_push($this->_empleados, $per);
$this->EliminarEmpleadoRepetidos();
}

public function CalcularSueldos()
{
	$cont=0;
	$longitud = count($this->_empleados);
	for ($i=0; $i < $longitud  ; $i++)
	 { 
	 	 $unEmpleado = new Empleado("", "", "", "" , "","" );
	 	 $cont += $this->_empleados[$i]->getterSueldo();
	}
	return $cont;
}
public function EliminarEmpleado($per)
{
   unset($_empleados[$per]);
}

private function EliminarEmpleadoRepetidos()
{
   //array_unique($this->_empleados);
}

}
?>