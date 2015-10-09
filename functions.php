<?php
	require_once("../configglobal.php");
	$database = "if15_sizen";

	//loome uue funktsiooni, et küsida ab'ist andmeid
	function getCarData(){
		
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		
		$stmt = $mysqli->prepare("SELECT id, user_id, number_plate, color FROM car_plates");
		echo $mysqli->error;
		$stmt->bind_result($id, $user_id, $number_plate, $color_from_db); 
		
		//võtab eest iga väärtuse ja paneme muutujasse
		$stmt->execute();
		
		// tühi array(massiiv), kuhu pistame abst ühe rea andmeid
		$array = array();
		// tee tsüklit nii mitu korda, kui saad andmebaasist ühe rea andmeid.
		while($stmt->fetch()){
			//loon objekti iga while tsükli kord
			$car = new StdClass();
			$car->id = $id;
			$car->number_plate = $number_plate;
			
			//lisame massiivi
			array_push($array, $car);
			echo "<pre>";
			var_dump($array);
			echo "</pre>";
			
		}
		
		$stmt->close();
		$mysqli->close();
	}
	
	
	


?> 