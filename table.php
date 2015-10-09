<?php


	require_once("functions.php");
	$car_list = getCarData();
	




?>
<table border= 1>
	<tr>
		<th>id</th>
		<th>user_id</th>
		<th>auto nr märk</th>
		<th>auto värv</th>
	
	</tr>
	<?php
		//iga massiivis oleva elemendi kohta
		//count($car_list) - massiivi pikkus
		for($i = 0; $i < count($car_list); $i++){
			//$i = $i + 1  ==  $i =+ 1  ==o   $i++
			echo "<tr>";
			
			echo "<td>".$car_list[$i]->id."</td>";
			echo "<td>".$car_list[$i]->user_id."</td>";
			echo "<td>".$car_list[$i]->number_plate."</td>";
			echo "<td>".$car_list[$i]->color."</td>";
			
			echo "</td>"; 
		}
	
	?>
	


</table>