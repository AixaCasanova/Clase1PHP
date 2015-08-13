<?php 
  
 $mes = substr(date("d.m.y"),3,2 );
 

$dia = substr(date("d.m.y"),0,2 );
 


if (($mes == 9 AND  $dia >=21 ) OR $mes == 10 OR $mes == 11 OR ( $mes == 12 and  $dia <= 21))
{
  echo "Es primavera"."</b>";
}  
   
if(( $mes == 12 and $dia >21 )  or $mes == 1 or $mes == 2 or ($mes == 3 and  $dia < 21))
{
echo "Es verano"."</b>";
} 
if(( $mes == 3 and $dia >= 21 )  or $mes == 4 or $mes == 5 or ( $mes == 6 and  $dia <= 21))
{
echo "Es otoño"."</b>";
} 
if( $mes == 6 and $dia > 21 or $mes == 7 or $mes == 8 or ($mes == 9 and  $dia < 21))
{
echo "Es Invierno"."</b>";
}
 



?>