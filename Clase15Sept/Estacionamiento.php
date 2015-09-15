<?php 

require_once "Auto.php";
 class Estacionamiento 
{
	

	private $_nombre;
	private $_autos;

	function __construct($nom)
	{
		$this->_nombre = $nom;
		$this->_autos =  array();
	}

public function getternom()
{
return $this->_nombre;
}	
public function Setternom($nom)
{
$this->_nombre = $nom;
}

public function getterAutos()
{
return $this->_autos;
}	
public function SetterAutos($autos)
{
$this->_autos = $autos;
}

public function AgregarAuto($UnAuto)
{
array_push($this->_autos, $UnAuto);
}

 public function MostrarString()
{
	$cont = count($this->_autos);
	   for ($i=0 ; $i <$cont  ; $i++ ) { 
	   
	   echo $this->_autos[$i]->ToString();
	   $dirIMG = $this->_autos[$i]->getterFoto();
	   echo "<img src='$dirIMG' border='0' width='300' height='100'>" ."</br>"."</br>";

	   }
}

public function MostrarTabla()
{
 $tabla = "<table border='2px'><tr><td>PATENTE</td><td>FOTO</td></tr>";
 $datosTabla="";
 $cont = count($this->_autos);
	   for ($i=0 ; $i <$cont  ; $i++ )
	   { 
	   	$dirIMG = $this->_autos[$i]->getterFoto();
		
		$datosTabla = $datosTabla ."<tr><td>".$this->_autos[$i]->getterPat()."</td><td><img src='$dirIMG' border='0' width='300' height='100'></td></tr>";
		$auxAcum = $datosTabla; 
		}

		$datosToT = $tabla . $datosTabla. "</table>";

		return $datosToT;
}



}
?>