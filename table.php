<?php

	include 'conexiuneBd.php';
	
	$tabel="CREATE TABLE `tabel` (Id INT AUTO_INCREMENT PRIMARY KEY,
								Nume VARCHAR(20),
								Email VARCHAR(30),
								Nr_intrebari INT,
								Corecte INT,
								Gresite INT)";
	mysqli_query($conexiune,$tabel);
	if(mysqli_query($conexiune,$tabel)){
		echo "Tabelul a fost creat.";
	}
	else{
		echo "Tabelul  nu a fost creat:".mysqli_error($conexiune);
	} 
	echo "<br>";	 
		
	mysqli_close($conexiune);

?>
