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
	/*echo $empleado->ToString();*/

	$emp = fopen("../Clase2/TxtEmpleados.txt", "a+");
	 $ex =  fwrite($emp,$empleado->ToString()."\r\n");
	 if($ex> 0) 
	 {
	 	echo "escritura EXITOSA! ----> "; 
		 
     	echo "<a href='../Clase2/Mostrar.php'><input type='button' value='Ir a Mostrar.php'> </a>";   

	 } 
	 else 
	 {
	 	echo "<a href='../Clase2/index.html'><input type='button' value='Volver al indice'> </a>";
	  
	 }
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

$destino = "../tmp/".$_FILES["archivo"]["name"];
move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
 

?>