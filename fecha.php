<h1>Fecha PHP</h1>


<?php 
 
echo date("l")."<br />"; 
$FechaDeHoy="Fecha: ".date("d.m.y");
echo($FechaDeHoy. "<br>");
echo date("d/m/y h:m:s"). "<br>";
echo date ("d/m/Y h:h:s	A"). "<br>";
echo date ("M d Y"). "<br>";
echo date ("F d Y"). "<br>";
echo date ("r"). "<br>";
echo date "dia juliano:".("z"). "<br>";
?>