<?php
			include("cost_connect.php");
			$gas = $_POST['gas'];
	                        $gas_room = $_POST['gas_room'];
$cm_ID = $_POST['cm_ID'];
	                         		
		
			$sql = "insert into gas (gas,gas_room,cm_ID) values  ('$gas','$gas_room','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
