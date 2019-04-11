<?php
			include("cost_connect.php");
			$gas = $_POST['gas'];
	                        $gas_room = $_POST['gas_room'];
$cm_ID = $_POST['cm_ID'];                                 
   $mem_ID = $_POST['mem_ID'];
	                         		
		
			$sql = "insert into gas (gas,gas_room,cm_ID,mem_ID) values  ('$gas','$gas_room','$cm_ID','$mem_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
