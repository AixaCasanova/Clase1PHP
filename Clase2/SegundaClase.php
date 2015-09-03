<?php 

require_once  "ClasePersona.php";
require_once  "ClaseEmpleado.php";
require_once  "ClaseFabrica.php";

$empleado = new Empleado("Aixa", "Casanova", "33341152", "029" , "25000","Femenino" );
$empleado2 = new Empleado("Eddie", "Vedder", "15431152", "001" , "50000","Masculino" );
echo $empleado->ToString();
$fabrica1 = new Fabrica("Redlink.sa");
$fabrica1->AgregarPersona($empleado);
$fabrica1->AgregarPersona($empleado2);
 

echo "</br>"."Suma de sueldos: " . $fabrica1->CalcularSueldos();




?>