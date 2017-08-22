<?php 


echo "<table border>";
	for ($lig=1; $lig < 11 ; $lig++) { 
		echo "<tr></tr>";
			echo "<th>table de $lig</th>";
		for ($col=1; $col < 11; $col++) { 
			$res = $lig * $col;
			echo "<td>"."$lig * $col = " . $res."</td>";
			
		}
	}
echo "</table>";


