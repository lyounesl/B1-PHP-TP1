<?php
	define( "CONV_ND_KMH" , 1.852 ) ;
	
	echo "Saisir la vitesse en km/h : " ;
	
	$vitessekm = fgets( STDIN ) ;
	
	$vitesseEnNoeuds = $vitessekm / CONV_ND_KMH ;
	
	echo "Résultat de la conversion : " , $vitesseEnNoeuds , " Noeuds\n" ;
?>
