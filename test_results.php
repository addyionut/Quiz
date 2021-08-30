<HTML>
	<HEAD>
		<style>
			table,th,td {
				border: 1px solid black;
			}
		</style>
	</HEAD>

	<body>
		<?php
			include "conexiuneBd.php";
			$afisareTabel="SELECT * FROM `tabel`";
			$rezultat=mysqli_query($conexiune,$afisareTabel);
			if(mysqli_num_rows($rezultat)>0){
				echo"<table width=\"60%\" align=center><tr>
					<th bgcolor=\"00FF00\">Nume</th>	
					<th bgcolor=\"00FF00\">Email</th>
					<th bgcolor=\"00FF00\">Nr intrebari/10</th>
					<th bgcolor=\"00FF00\">Corecte</th>
					<th bgcolor=\"00FF00\">Gresite</th>";
				while($row=mysqli_fetch_assoc($rezultat)){
					echo "<tr><td>".$row["Nume"]."</td>"
							."<td>".$row["Email"]."</td>"
							."<td>".$row["Nr_intrebari"]."</td>"
							."<td >".$row["Corecte"]."</td>"
							."<td>".$row["Gresite"]."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "0 rows selected";
			}
		
		mysqli_close($conexiune);
	
	?>

	</body>
</html>
