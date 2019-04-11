
	<?php
			include("sell_connect.php");

	$sl_ID = $_POST['sl_ID'];
	

	$sql = "DELETE from sell where sl_ID='$sl_ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		








