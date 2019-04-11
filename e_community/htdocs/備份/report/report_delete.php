
	<?php
			include("report_connect.php");

	$rp_ID = $_POST['rp_ID'];
	

	$sql = "DELETE from report where rp_ID='$rp_ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		








