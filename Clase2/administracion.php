<?php 

require_once  "ClasePersona.php";
require_once  "ClaseEmpleado.php";
require_once  "ClaseFabrica.php";

/*$empleado = new Empleado("Aixa", "Casanova", "33341152", "029" , "25000","Femenino" );
$empleado2 = new Empleado("Eddie", "Vedder", "15431152", "001" , "50000","Masculino" );
echo $empleado->ToString();
$fabrica1 = new Fabrica("Redlink.sa");
$fabrica1->AgregarPersona($empleado);
$fabrica1->AgregarPersona($empleado2);
*/

try
{
	if($_POST["nombre"]=="" || $_POST["apellido"]=="" ||  $_POST["dni"]=="" ||  $_POST["legajo"]=="" || $_POST["sueldo"]=="" ||  $_POST["sexo"]==""){throw new Exception("Reingrese");}

	$empleado = new Empleado($_POST["nombre"],$_POST["apellido"], $_POST["dni"], $_POST["legajo"] ,$_POST["sueldo"],$_POST["sexo"]);
	echo $empleado->ToString();
	$fabrica1 = new Fabrica("Redlink.sa");
	$fabrica1->AgregarPersona($empleado);
	/*echo "</br>"."Suma de sueldos: " . $fabrica1->CalcularSueldos();*/
}
catch(Exception $e)
{?>
	<html>
	<head>
 	</head>
	<body>
		<span>Atencion! ingreso algun dato vacio! vuelva a intentar:</span></br>
 		<A HREF="index.html"> <input type="button" value="Reingresar todos los campos"></A>
 	</body>
	</html>
<?php 	
}



?>