<?php 

require_once "ClasePersona.php";
class Empleado extends Persona
{

private $_sueldo;
private $_legajo;

	function __construct($nombre, $apellido, $dni, $leg, $sueldo,$sexo)
	{
		parent::__construct($nombre, $apellido, $dni, $sexo);
		$this->_legajo = $leg;
		$this->_sueldo = $sueldo;

	}


public function getterLeg()
{
return $this->_legajo;
}	
public function SetterLeg($leg)
{
$this->_legajo = $leg;
}


public function getterSueldo()
{
return $this->_sueldo;
}	
public function SetterSueldo($sueldo)
{
$this->_sueldo = $sueldo;
}


public function ToString()
{
	$padre = parent::ToString();
	return $padre . "</br>" . " Legajo: " .  $this->getterLeg() .  "</br>" . "  Sueldo: " . $this->getterSueldo() ;
}

public function Hablar($idioma)
{

	return "Habla el idioma: " . $idioma;
}


}

?>