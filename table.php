<?php
	require_once("functions.php");
	
	//kas kustutame, ?delete = vastav id mida kustutada on aadressireal
	if(isset($_GET["delete"])){
		echo "Kustutame id" .$_GET["delete"];
		//käivitan funktsiooni, saadan kaasa id
		deleteCar($_GET["delete"]);
	
	}
	
	//käivitan funktsiooni
	$car_array = getCarData();
	
	//trükin välja esimese auto
	//echo $car_array[0]->id." ".$car_array[0]->plate;
	
?>

<h2>Tabel</h2>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Numbrimärk</th>
		<th>User id</th>
		<th>Värv</th>
		<th>X</th>
	</tr>

	<?php
		//trükime välja read
		//massiivi pikkus count()
		for($i = 0; $i < count($car_array); $i++){
			//echo $car_array[$i]->id;
			echo "<tr>";
			echo "<td>".$car_array[$i]->id."</td>";
			echo "<td>".$car_array[$i]->plate."</td>";
			echo "<td>".$car_array[$i]->user_id."</td>";
			echo "<td>".$car_array[$i]->color."</td>";
			echo "<td><a href='?delete=".$car_array[$i]->id."'>X</a></td>";
			echo "</tr>";
		}
	
	?>
</table>