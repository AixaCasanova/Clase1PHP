<?php 
require_once  "ClasePersona.php";
require_once  "ClaseEmpleado.php";
require_once  "ClaseFabrica.php";

$op = fopen("../Clase2/TxtEmpleados.txt", "r");

		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($op))
		{
			/*ECHO fgets($op). "<br/>";*/
			$RENGLON = fgets($op);
			$arrayUnEmpleado = explode("-", $RENGLON);
			/*var_dump($arrayUnEmpleado);*/

			if (var_dump($arrayUnEmpleado) > 0 ) {
				$empleado = new Empleado($arrayUnEmpleado[0],$arrayUnEmpleado[1], $arrayUnEmpleado[2],$arrayUnEmpleado[3] , $arrayUnEmpleado[4], $arrayUnEmpleado[5] );
				echo $empleado->ToString();
			}
			
		}

		echo "<a href='../Clase2/Index.html'><input type='button' value='Cargar otra persona'> </a>";  
?>




