<?php

	include 'conexiune.php';

	$creareBd="CREATE DATABASE `inscrisi_test`";
	if(mysqli_query($conexiune,$creareBd)){
		echo "Baza de date a fost creata";
	}
	else 
		//echo "Baza de date nu a fost creata. ".mysqli_error($conexiune);
	
	mysqli_close($conexiune);
?>
