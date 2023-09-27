<?php
	
	echo "Saisir la temperature en °C : " ;
	
	$temp°C = fgets( STDIN ) ;
	
	$°F = 1.8 * $temp°C + 32 ;
	
	echo "Temperature en °F : " , $°F , "\n";
?>
