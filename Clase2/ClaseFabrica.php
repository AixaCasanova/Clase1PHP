<?php 

/**
* 
*/
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
}



}
?>