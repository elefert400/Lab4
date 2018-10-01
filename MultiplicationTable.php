<?php
echo "<table border =\"1\" style='border-collapse: solid black'>";
	for ($w=1; $w <= 100; $w++) { 
		echo "<tr> \n";
		for ($i=1; $i <= 100; $i++) { 
		   $p = $i * $w;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
