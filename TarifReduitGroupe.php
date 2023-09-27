<?php
	define( "Tarif" , 17 ) ;
	
	echo "nbrAdultes : " ;
	
	$nbrAdultes = fgets( STDIN ) ;
	
	$Total = $nbrAdultes * Tarif ;
	
	echo "Montant total a payer pour la traversée : ", $Total , "€\n" ;
?>
