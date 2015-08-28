<?php 

/**
* 
*/
abstract class Persona 
{

private $_nombre;
private $_apellido;
private $_dni;


	function __construct($nom, $ape, $dni)
	{
		
		$this->_nombre = $nom;
		$this->_apellido = $ape;
		$this->_dni = $dni;

	}

public function getterNom()
{
return $this->_nombre;
}	
public function SetterNom($nom)
{
$this->_nombre = $nom;
}

public function getterApell()
{
return $this->_apellido;
}	
public function SetterApell($ape)
{
$this->_apellido = $ape;
}

 public function getterDni()
{
return $this->_dni;
 }	
 public function SetterDni($dni)
{
$this->_dni = $dni;
}


public function ToString()
{
	return "Nombre: " .  $this->getterNom() . "</br>" . "  Apellido: " . $this->getterApell() . "</br>" . "  Dni: " . $this->getterDni();
}


public abstract function Hablar($idioma);




}


?>
 