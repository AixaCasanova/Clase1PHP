<?php 

 class Auto 
{

private $_patente;
private $_foto;
private $_fechaIngreso;
private $_fechaSalida;


	function __construct($pat,$foto)
	{
		
		$this->_patente = $pat;
		$this->_foto = $foto;
		$this->_fechaIngreso = date("y-m-d H:i-s");
	 

	}

public function getterPat()
{
return $this->_patente;
}	
public function SetterPat()
{
$this->_patente = null;
}

public function getterFoto()
{
return $this->_foto;
}	
public function SetterFoto($foto)
{
$this->_foto = $foto;
}

public function getterFIngreso()
{
return $this->_fechaIngreso;
}	
public function SetterFIngreso($FIng)
{
$this->_fechaIngreso =$FIng;
}

 
public function ToString()
{
	return   $this->getterPat() . "-" . $this->getterFoto(). "-" . $this->getterFIngreso() ;
}


}


?>
 