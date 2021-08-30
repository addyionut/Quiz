<html>
	<body style="background-color:LightCyan">
		<h2 style="text-align:center;">Raspunsuri</h2>
		<hr>
	</body>
</html>
<?php
	$raspunsCorect=0;
	$raspunsGresit=0;
	$nrIntrebari=0;
	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
			if(isset( $_POST[ 'tara' ] ) && !empty( $_POST[ 'tara' ] ) ) {
				$nrIntrebari++;		
				if($_POST["tara"]=="Angliei") {
					$raspunsCorect++;
					echo "1. Ai raspuns corect: ".$_POST["tara"].".";
				}
					else {
						$raspunsGresit++;			
						echo "1. Nu ai raspuns corect!";
					}
			}
			else 
				echo "1. Nu ai bifat nici un raspuns!";	
		}
		
	}

	echo "<br>";
	echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'numar' ] ) && !empty( $_POST[ 'numar' ] ) ) 
				{$nrIntrebari++;
					if($_POST["numar"]=="intre 6 si 11 milioane")
					{
						$raspunsCorect++;
						echo "2. Ai raspuns corect: ".$_POST["numar"].".";
					}
					else 
					{
							$raspunsGresit++;
								
								echo "2. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "2. Nu ai bifat nici un raspuns!";	
		}
	}

echo "<br>";
echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'primar' ] ) && !empty( $_POST[ 'primar' ] ) ) 
				{$nrIntrebari++;
					if($_POST["primar"]=="Sadiq Khan")
						{
						$raspunsCorect++;
						echo "3. Ai raspuns corect: ".$_POST["primar"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "3. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "3. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'cartiere' ] ) && !empty( $_POST[ 'cartiere' ] ) ) 
				{$nrIntrebari++;
					if($_POST["cartiere"]=="Ilford" )
					{
						$raspunsCorect++;
						echo "4. Ai raspuns corect: ".$_POST["cartiere"].".";
					}	
					 else 
					 {
							$raspunsGresit++;
								
								echo "4. Nu ai raspuns corect!";
					
					}
				}
				else 
					echo "4. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'rau' ] ) && !empty( $_POST[ 'rau' ] ) ) 
				{$nrIntrebari++;
					if($_POST["rau"]=="Tamisa")
						{
						$raspunsCorect++;
						echo "5. Ai raspuns corect: ".$_POST["rau"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "5. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "5. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";
	
	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'tunel' ] ) && !empty( $_POST[ 'tunel' ] ) ) 
				{$nrIntrebari++;
					if($_POST["tunel"]=="Rotherhite Tunnel")
						{
						$raspunsCorect++;
						echo "6. Ai raspuns corect: ".$_POST["tunel"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "6. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "6. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'autostrada' ] ) && !empty( $_POST[ 'autostrada' ] ) ) 
				{$nrIntrebari++;
					if($_POST["autostrada"]=="M25")
						{
						$raspunsCorect++;
						echo "7. Ai raspuns corect: ".$_POST["autostrada"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "7. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "7. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";

	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'test' ] ) && !empty( $_POST[ 'test' ] ) ) 
				{$nrIntrebari++;
					if($_POST["test"]=="Columna lui Horatio Nelson se afla in Piata Trafalgar")
						{
						$raspunsCorect++;
						echo "8. Ai raspuns corect: ".$_POST["test"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "8. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "8. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";
	
	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'parc' ] ) && !empty( $_POST[ 'parc' ] ) ) 
				{$nrIntrebari++;
					if($_POST["parc"]=="Hyde Park")
						{
						$raspunsCorect++;
						echo "9. Ai raspuns corect: ".$_POST["parc"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "9. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "9. Nu ai bifat nici un raspuns!";
		}
	}

	echo "<br>";
	echo "<br>";

		
	if(isset($_POST["buton"]))
	{
		if( isset( $_POST ) && !empty( $_POST )) 
		{
				if( isset( $_POST[ 'constructie' ] ) && !empty( $_POST[ 'constructie' ] ) ) 
				{$nrIntrebari++;
					if($_POST["constructie"]=="The Shard")
						{
						$raspunsCorect++;
						echo "10. Ai raspuns corect: ".$_POST["constructie"].".";
						}
						else 
						{
							$raspunsGresit++;
								
								echo "10. Nu ai raspuns corect!";
						
						}
				}
				else 
					echo "10. Nu ai bifat nici un raspuns!";
		}
	}
	
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
?>

<html>

	<h3 style="text-align:center;">
	
		<hr>

<?php
	include ('conexiuneBd.php');
		$nume= $_POST['nume'];
		$email= $_POST['email'];

			if($nume || $email){
				$inserare= "INSERT INTO tabel (nume, email,nr_intrebari, corecte, gresite) VALUES ('$nume', '$email','$nrIntrebari','$raspunsCorect','$raspunsGresit')";
				mysqli_query($conexiune,$inserare);
		
			}
			else{
				echo "Nu ai completat numele sau adresa de email<BR><BR>";
			}
		
			if(isset($_POST["nume"])&& !empty( $_POST["nume"] )){
				echo $_POST["nume"].", ai raspuns la ".$nrIntrebari." din 10 intrebari."."<br>"."<br>";
			}
			else 
				echo "Ai raspuns la ".$nrIntrebari." din 10 intrebari."."<br>"."<br>";
			
			if($raspunsCorect==1){	
				echo "Ai raspuns corect la ".$raspunsCorect." intrebare."."<br>";
			}
			else
				echo "Ai raspuns corect la ";?><html><b style="color:#088A08"><?php echo $raspunsCorect; ?></b></html><?php echo  " intrebari."."<br>";
			if($raspunsGresit==1){
				echo "Ai raspuns gresit la ".$raspunsGresit." intrebare."."<br>";}
			else
				echo "Ai gresit raspunsul la ";?><html><b style="color:#FF0000"><?php echo $raspunsGresit; ?></b></html><?php echo " intrebari.";

			//mysqli_close($conexiune);

?>
	</h3>
	<a href="rezultate_test.php">Rezultate test</a>	
</html>
