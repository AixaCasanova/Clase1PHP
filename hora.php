
<h1>Hora PHP</h1>


<?php 
 
$hora = date("h");
echo $hora." ";
$ampm = date("A"); 
echo $ampm ."\n";

if ( $hora >= 5  and $hora <= 12 and $ampm == "AM"){echo "Es de Mañana";}

if ( $hora >= 1  and $hora <= 7 and  $ampm == "PM"){echo "Es de Tarde";}

if (( ($hora >= 8  and $hora <= 12) and ($ampm == "PM")  ) or ( ($hora >= 0 and $hora < 5) and ($ampm =="AM") ) ){echo "Es de Noche";}
  
 
?>