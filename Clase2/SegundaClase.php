<?php 

require_once  "ClasePersona.php";
require_once  "ClaseEmpleado.php";
require_once  "ClaseFabrica.php";

$empleado = new Empleado("Aixa", "Casanova", "33341152", "029" , "25000" );
echo $empleado->ToString();
$fabrica1 = new Fabrica("Redlink.sa");
$fabrica1->AgregarPersona($empleado);





?>