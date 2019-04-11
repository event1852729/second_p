	<?php
			include("facility_connect.php");
			
         $ay_status = $_POST['ay_status'];
	$ay_ID = $_POST['ay_ID'];
	


	$sql = "UPDATE apply SET ay_status='$ay_status'  WHERE ay_ID='$ay_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		



