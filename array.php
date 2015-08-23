

<h1>Array PHP</h1>
<?php 

 

$array = array("Rojo","Azul","Verde","Negro","Marron");
 

$longitud = count($array);
 
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
 
echo $array[$i]."<br />" ;
  
}

?>