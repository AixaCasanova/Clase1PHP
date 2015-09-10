<?php 

/**
* 
*/
abstract class Persona 
{

private $_nombre;
private $_apellido;
private $_dni;
private $_sexo;


	function __construct($nom, $ape, $dni, $sexo)
	{
		
		$this->_nombre = $nom;
		$this->_apellido = $ape;
		$this->_dni = $dni;
		$this->_sexo = $sexo;

	}

public function getterNom()
{
return $this->_nombre;
}	
public function SetterNom($nom)
{
$this->_nombre = $nom;
}

public function getterSexo()
{
return $this->_sexo;
}	
public function SetterSexo($sexo)
{
$this->_nombre = $sexo;
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
	return   $this->getterNom() . "-" . $this->getterApell(). "-" . $this->getterDni(). "-" . $this->getterSexo();
}


public abstract function Hablar($idioma);




}


?>
 