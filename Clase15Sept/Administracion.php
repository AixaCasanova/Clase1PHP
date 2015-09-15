<?php 

require_once "Auto.php";
require_once "Estacionamiento.php";
try {

 $patAdm =$_POST["Patente"];
 $fotoAdm = $_FILES["Foto"]["name"];
// var_dump($_FILES["Foto"]);

$a1 = new Auto($patAdm,$fotoAdm);
//$a1->SetterFIngreso();
$autoString = $a1->ToString();
//Escribir el archivo autos.txt
 $txtAuto = fopen("../Clase15Sept/Autos.txt", "a+");
 $cant = fwrite($txtAuto, $autoString );
 if($cant > 0)
		{
			echo "escritura EXITOSA<br/>";			
		}

 fclose($txtAuto);
 
 $destino = "../Clase15Sept/".$_FILES["Foto"]["name"];
move_uploaded_file($_FILES["Foto"]["tmp_name"], $destino);
 //echo $patAdm . "</br>" . $fotoAdm ."</br>" ;

//leer el archivo autos.txt
/*
$txtAutoLee = fopen("../Clase15Sept/Autos.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($txtAutoLee))
		{
	 	echo fgets($txtAutoLee), "<br/>";
		}
 */
$est1 = new Estacionamiento("Mi Estacionamiento");
$est1->AgregarAuto($a1);
$est1->AgregarAuto($a1);
//$est1->MostrarString();
ECHO $est1->MostrarTabla();

 
} catch (Exception $e) {
	
}

?>